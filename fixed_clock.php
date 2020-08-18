// var questiontime = '<?php #echo $vir_subjectwise_exam_setup->total_time; ?>';
                            // questiontime = questiontime * 60;
                            // var clocktime = 1;
                            // let duration = clocktime * questiontime

                            /******* Create a simple clock ********/
                            const timerContainer = document.getElementById('clock');

                            // let start = Date.now();
                            // let diff, min, sec;

                            // let timer = () => {

                            //     diff = duration - (((Date.now() - start) / 1000) | 0);

                            //     if (diff <= 0) {
                            //         clearInterval(timerId);
                            //         swal({
                            //                 title: "Time is over!!! Are you sure?",
                            //                 text: "This result has submited",
                            //                 icon: "warning",
                            //                 buttons: true,
                            //                 dangerMode: true,
                            //             })
                            //             .then((willDelete) => {
                            //                 if (willDelete) {
                            //                     nextClickSubmitData('done');
                            //                     // swal("Your selected data submited", {
                            //                     //     icon: "success",
                            //                     // });
                            //                 } else {
                            //                     var url = base_url + 'site/index?type=0';
                            //                     window.location.href = url;
                            //                     swal("your selected data not submit!");
                            //                 }
                            //             });
                            //     };
                            //     //use bitwise to truncate the float
                            //     min = (diff / 60) | 0;
                            //     sec = (diff % 60) | 0;

                            //     min = min < 10 ? '0' + min : min;
                            //     sec = sec < 10 ? '0' + sec : sec;

                                timerContainer.textContent = min + ':' + sec;

                            // };

                            let timerId;
                            timer();
                            timerId = setInterval(timer, 1000);
