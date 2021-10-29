def sum(n,x)
	return 0 if n == 0
  	n+sum(n-1)
end