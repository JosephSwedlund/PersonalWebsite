<!DOCTYPE html>
<html>
	<head>
		<title>Joseph Swedlund / Programming Tut</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
		.otherlink {text-align: center;}
		#intro-textbox {text-align: center;}
	</style>

	<body>
		<h1 style="text-decoration: underline;">Joseph Swedlund's Personal Website</h1>
		<div id="linkbar">
			<a class="cbot" id="home" href="index.php">Home</a>
			<a class="currentbut" style="color:red;"  href="learning.php">Learning</a>
			<a class="cbot" id="about"  href="about_me.php">About Me</a>
			<a class="cbot" id="recent" href="recent_updates.php">Recent Updates</a>
			<a class="cbot" id="projects" href="projects.php">Projects</a>            
		</div>


		<div>
			<a href="#picking_a_language" class="tut-title"><h3>How to Choose a Programming Language</h3></a>
		</div>
		<div class="tut-text">
			</br>
			<p>Picking a programming language, is something I feel like most people overthink, 
			in my opinion its pretty simple. Just choose a language that is reletively common 
			or well known which can do what you need it to be able to to. And use that.
			For this tutorial I'll likely be using C++ 
			as I feel like it will easier so show off many of the ideas of programming I feel like
			are important to understand early on. I may also include example code in Python 
			and or PHP depending on the problem, I may just end up doing all three simply for fun.</p>
		</br>
		</div>
		<div>
			<a href="#hello_world" class="tut-title"><h3>Hello World</h3></a>
		</div>
		<div class="tut-text">
			</br>
			<p>
				Hello World programs are a tradition in the field of computer science. 
				The basic idea is to get a basic program up and running that prints out to the terminal
				the words "Hello World" just as a way to know the basics of the language are set up 
				properly on your computer. As stated in the previous lesson this tutorial will be using the
				C++ programming language. So first you will need to download a C++ compiler. On a GNU/
				Linux opterating system (one based on Debian) you easily download the GNU C and C++ Compiler you can simply type the
				following into your terminal:
			</p>
			</br>
			<p class="code-snip">&gt;sudo apt install g++</p>
			</br>
			
			<p>
			Next create a file called "main.cpp" In the file type out the following code.
			</p>
			</br>
			<p class="code-snip">
			#include &lt;iostream&gt;
			</br>
			int main() { </br>
			&emsp; &emsp; std::cout &lt;&lt; "Hello World.";</br>
			&emsp; &emsp; return 0;</br>
			}
			</p>
			<p>
			This is your source code, you will understand what it all means in just a few lessons.
			All you have to know is that this code when compiled and run prints out in the terminal
			"Hello World." then make sure you're in the same directory in as your .cpp file is. 
			now we need to compile the source code. To do this type the follwing in the terminal:
			</p>
			</br>
			<p class="code-snip">&gt;g++ main.cpp</p>
			</br>
			<p>
			This is just calling the compiler (g++) we downloaded with the earlier command 
			we pass the compiler the .cpp file when we put the name after the g++ command.
			you will see that there is now a file called a.out this is the executable file we can
			run it by typing the following command in your terminal:
			</p>
			</br>
			<p class="code-snip">&gt;./a.out</p>
			</br>
			

		</div>

		

		<p style="font-size: 10px;">(This website is a work in progress - Joseph Swedlund)</p>
	</body>

</html>

