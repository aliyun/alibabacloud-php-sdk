<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @description The network type. Only Virtual Private Cloud (VPC) is supported.
     *
     * @example vpc
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp16k1dvzxtmagcva****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone where the instance is deployed.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $vsArea;

    /**
     * @description The ID of the vSwitch associated with the specified VPC.
     *
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
