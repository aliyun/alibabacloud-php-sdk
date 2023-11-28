<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @description The ID of the vSwitch to which the instance is connected.
     *
     * @example vpc
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone where the cluster resides.
     *
     * @example vpc-bp16k1dvzxtmagcva****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The network type of the instance. Valid values: Currently, only Virtual Private Cloud (VPC) are supported.
     *
     * @example cn-hangzhou-*
     *
     * @var string
     */
    public $vsArea;

    /**
     * @example vsw-bp1k4ec6s7sjdbudw****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'type'      => 'type',
        'vpcId'     => 'vpcId',
        'vsArea'    => 'vsArea',
        'vswitchId' => 'vswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }
        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }
        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        return $model;
    }
}
