# first of all import the socket library
import socket
import SocketServer
from flask import Flask, request, Response

app = Flask(__name__)

#s=socket.socket(socket.AF_INET, socket.SOCK_STREAM);

@app.route("/", methods=['GET'])
def handler():
    value1 = request.args.get('r')
    value2 = request.args.get('g')
    value3 = request.args.get('b')
    value4 = request.args.get('w')
    value5 = request.args.get('port')
    socketbinding(value1, value2, value3, value4, value5)
    return Response(value1 + value2 + value3 + value4 + value5)


def socketbinding(value1, value2, value3, value4, value5):
    # next create a socket object
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    print "Socket successfully created"
    s.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)

    # reserve a port on your computer in our
    # case it is 12345 but it can be anything
    port = int(value5)

    # Next bind to the port
    # we have not typed any ip in the ip field
    # instead we have inputted an empty string
    # this makes the server listen to requests
    # coming from other computers on the network
    s.bind(('', port))
    print "socket binded to %s" % (port)

    # put the socket into listening mode
    print(value1)
    print(value2)
    print(value3)
    print(value4)
    print(value5)
#    s.listen(5)
    s.listen(1) 
    print "socket is listening"

    # a forever loop until we interrupt it or
    # an error occurs
	
    # Establish connection with client.
    c, addr = s.accept()
    print 'Got connection from', addr

    #send a thank you message to the client.
    #c.send("AT+PWM=1,"+value1+"\r"+"\n")
    #c.send("AT+PWM=4,"+value2+"\r"+"\n")
    c.send("AT+PWM=5,"+value3+"\r"+"\n")
    c.send("AT+PWM=6,"+value4+"\r"+"\n")

    # Close the connection with the client

    c.close()


if __name__ == "__main__":
    app.run(host='0.0.0.0', port=8847)
