<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource;

use AlibabaCloud\Tea\Model;

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
        'vpcInstanceId'     => 'VpcInstanceId',
        'vswitchInstanceId' => 'VswitchInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return vpc
     */
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
