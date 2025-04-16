<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;

use AlibabaCloud\Dara\Model;

class aclConfig extends Model
{
    /**
     * @var int
     */
    public $strictMode;
    protected $_name = [
        'strictMode' => 'StrictMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
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
        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        return $model;
    }
}
