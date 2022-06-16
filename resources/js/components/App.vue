<template>
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" v-if="!$route.meta.hideNavbar">
        <a class="navbar-brand" href="#"><img src="test.jpg" width="90px" height="100px" class="img-fluid rounded-circle img-responsive" alt="company_logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-3" style="width:50%;">
                <form action="" style="width:100%">
                    <div class="input-group" style="width:100%">
                        <input type="search" class="form-control form-control-lg" placeholder="Search..." style="width:75%">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </nav>
    <br>
    <router-view></router-view>
</div>
</template>

<script>
export default {
    data: function () {
        return {}
    },
}
</script>
