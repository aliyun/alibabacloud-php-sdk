<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribePolicyAdvancedConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $internetSwitch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'internetSwitch' => 'InternetSwitch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetSwitch) {
            $res['InternetSwitch'] = $this->internetSwitch;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetSwitch'])) {
            $model->internetSwitch = $map['InternetSwitch'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
