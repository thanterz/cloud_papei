<html> 
  <head>
    <title>S3 POST Form</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>

  <body> 
    <form action="https://mpsp14087.s3.amazonaws.com/" method="post" enctype="multipart/form-data">
      <input type="hidden" name="key" value="uploads/${filename}">
      <input type="hidden" name="AWSAccessKeyId" value=" AKIAJ544BGTU6SCLOAWA "> 
      <input type="hidden" name="acl" value="private"> 
      <input type="hidden" name="success_action_redirect" value="http://localhost/">
      <input type="hidden" name="policy" value="eyJleHBpcmF0aW9uIjogIjIwMTktMDEtMDFUMDA6MDA6MDBaIiwiY29uZGl0aW9ucyI6IFsgeyJidWNrZXQiOiAiczMtYnVja2V0In0sIFsic3RhcnRzLXdpdGgiLCAiJGtleSIsICJ1cGxvYWRzLyJdLHsiYWNsIjogInByaXZhdGUifSx7InN1Y2Nlc3NfYWN0aW9uX3JlZGlyZWN0IjogImh0dHA6Ly9sb2NhbGhvc3QvIn0sWyJzdGFydHMtd2l0aCIsICIkQ29udGVudC1UeXBlIiwgIiJdLFsiY29udGVudC1sZW5ndGgtcmFuZ2UiLCAwLCAxMDQ4NTc2XV19">
      <input type="hidden" name="signature" value="bmYbMGLDhsJsVGLatkl4sH1Vb/4=">
      <input type="hidden" name="Content-Type" value="image/jpeg">
      <!-- Include any additional input fields here -->

      File to upload to S3: 
      <input name="file" type="file"> 
      <br> 
      <input type="submit" value="Upload File to S3"> 
    </form> 
  </body>
</html>
