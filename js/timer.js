
		
			var Timer;
			var TotalSeconds;
			
			function CreateTimer(TimerID, Time) 
			{
				Timer = document.getElementById(TimerID);
				TotalSeconds = Time;
				
				UpdateTimer()
				window.setTimeout("Tick()", 1000);

			}
				
			
			
			function Tick() 
			{
				
				if (TotalSeconds <=0)
				{
					alert("times up")
					return;
				}
				TotalSeconds -= 1;
				UpdateTimer() 
				window.setTimeout("Tick()", 1000);
			}
			
			
			function UpdateTimer()
			{
				timerDiv.innerHTML = TotalSeconds;
			}
			

