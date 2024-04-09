<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class TensorboardSpec extends Model
{
    /**
     * @example ecs.g6.large
     *
     * @var string
     */
    public $ecsType;

    /**
     * @example sg-xxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-xxxx
     *
     * @var string
     */
    public $switchId;

    /**
     * @example vpc-xxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ecsType'         => 'EcsType',
        'securityGroupId' => 'SecurityGroupId',
        'switchId'        => 'SwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsType) {
            $res['EcsType'] = $this->ecsType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TensorboardSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsType'])) {
            $model->ecsType = $map['EcsType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
