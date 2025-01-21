<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeSpotDiscountHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var bool
     */
    public $isProtect;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'isProtect'    => 'IsProtect',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isProtect) {
            $res['IsProtect'] = $this->isProtect;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsProtect'])) {
            $model->isProtect = $map['IsProtect'];
        }

        return $model;
    }
}
