import smtplib
fromaddr = 'avocadoguacamole11@gmail.com'
toaddrs  = 'amauri.av25@gmail.com'
msg = 'Docker uebung!'
username = 'avocadoguacamole11@gmail.com'
password = 'avocguac'
server = smtplib.SMTP('smtp.gmail.com:587')
server.ehlo()
server.starttls()
server.login(username,password)
server.sendmail(fromaddr, toaddrs, msg)
server.quit()

