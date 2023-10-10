<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListEcsNotInClusterRequest extends Model
{
    /**
     * @description The network type. Valid values:
     *
     *   1: classic network
     *   2: virtual private cloud (VPC)
     *
     * @example 2
     *
     * @var int
     */
    public $networkMode;

    /**
     * @description The ID of the VPC. This parameter is required if the NetworkMode parameter is set to 2.
     *
     * @example vpc-2zef6ob8****v8x3q46kp
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'networkMode' => 'NetworkMode',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcsNotInClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
