<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;

class aclInfo extends Model
{
    /**
     * @var bool
     */
    public $defaultVpcAuthFree;
    protected $_name = [
        'defaultVpcAuthFree' => 'defaultVpcAuthFree',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultVpcAuthFree) {
            $res['defaultVpcAuthFree'] = $this->defaultVpcAuthFree;
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
        if (isset($map['defaultVpcAuthFree'])) {
            $model->defaultVpcAuthFree = $map['defaultVpcAuthFree'];
        }

        return $model;
    }
}
