<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest;

use AlibabaCloud\Dara\Model;

class vpcs extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcType;

    /**
     * @var int
     */
    public $vpcUserId;
    protected $_name = [
        'regionId' => 'RegionId',
        'vpcId' => 'VpcId',
        'vpcType' => 'VpcType',
        'vpcUserId' => 'VpcUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        if (null !== $this->vpcUserId) {
            $res['VpcUserId'] = $this->vpcUserId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        if (isset($map['VpcUserId'])) {
            $model->vpcUserId = $map['VpcUserId'];
        }

        return $model;
    }
}
