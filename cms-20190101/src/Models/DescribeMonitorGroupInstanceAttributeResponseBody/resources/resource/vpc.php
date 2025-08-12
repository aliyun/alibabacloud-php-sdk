<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource;

use AlibabaCloud\Dara\Model;

class vpc extends Model
{
    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $vswitchInstanceId;
    protected $_name = [
        'vpcInstanceId' => 'VpcInstanceId',
        'vswitchInstanceId' => 'VswitchInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        if (null !== $this->vswitchInstanceId) {
            $res['VswitchInstanceId'] = $this->vswitchInstanceId;
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
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        if (isset($map['VswitchInstanceId'])) {
            $model->vswitchInstanceId = $map['VswitchInstanceId'];
        }

        return $model;
    }
}
