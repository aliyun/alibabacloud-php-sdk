<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class VPCConfig extends Model
{
    /**
     * @example sg-bp18hj1wtxgy3b0***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example vpc-***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'securityGroupId',
        'vSwitchIds'      => 'vSwitchIds',
        'vpcId'           => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['vSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VPCConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }
        if (isset($map['vSwitchIds'])) {
            if (!empty($map['vSwitchIds'])) {
                $model->vSwitchIds = $map['vSwitchIds'];
            }
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
