<?php

namespace AprSoft\QiNiu\Live;

use Qiniu\Credentials;
use Pili\Hub;
use yii\base\Component;

class Live extends Component
{
    public $accessKey;

    public $secretKey;

    public $hubName;

    public function hub()
    {
        return (new Hub(new Credentials($this->accessKey, $this->secretKey), $this->hubName));
    }

}
