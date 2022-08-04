<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models;

use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySevenRequest\home;
use AlibabaCloud\Tea\Model;

class HuichengTestGraySevenRequest extends Model
{
    /**
     * @var home
     */
    public $home;
    protected $_name = [
        'home' => 'Home',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->home) {
            $res['Home'] = null !== $this->home ? $this->home->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HuichengTestGraySevenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Home'])) {
            $model->home = home::fromMap($map['Home']);
        }

        return $model;
    }
}
