  let modal = document.getElementById('videoModal');
  let video = document.getElementById('videoIframe');
  
  modal.addEventListener('hide.bs.modal', function (event) {
    video.src = 'https://www.youtube.com/embed/st2GHdl0YlU?controls=0';
  });

