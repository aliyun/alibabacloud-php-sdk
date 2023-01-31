<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class RevokeInstanceFromVbrShrinkRequest extends Model
{
    /**
     * @example ALL
     *
     * @var string
     */
    public $grantType;

    /**
     * @example vpc-bp1brjuegjc88v3u9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vbrInstanceIdsShrink;

    /**
     * @example 1210123456123456
     *
     * @var string
     */
    public $vbrOwnerUid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'grantType'            => 'GrantType',
        'instanceId'           => 'InstanceId',
        'regionId'             => 'RegionId',
        'vbrInstanceIdsShrink' => 'VbrInstanceIds',
        'vbrOwnerUid'          => 'VbrOwnerUid',
        'vbrRegionNo'          => 'VbrRegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vbrInstanceIdsShrink) {
            $res['VbrInstanceIds'] = $this->vbrInstanceIdsShrink;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeInstanceFromVbrShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VbrInstanceIds'])) {
            $model->vbrInstanceIdsShrink = $map['VbrInstanceIds'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}
