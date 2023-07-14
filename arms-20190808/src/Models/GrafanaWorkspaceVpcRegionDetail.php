<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceVpcRegionDetail extends Model
{
    /**
     * @example fc、ansm
     *
     * @var string
     */
    public $fcConfig;

    /**
     * @example 配置ID
     *
     * @var int
     */
    public $id;

    /**
     * @example Uninitialized
     *
     * @var string
     */
    public $installStatus;

    /**
     * @example vpc-abc*****
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @example 10988**********
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example vpc-2ze4siu98**********
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'fcConfig'         => 'fcConfig',
        'id'               => 'id',
        'installStatus'    => 'installStatus',
        'name'             => 'name',
        'regionId'         => 'regionId',
        'securityGroupId'  => 'securityGroupId',
        'securityGroupIds' => 'securityGroupIds',
        'userId'           => 'userId',
        'vSwitchId'        => 'vSwitchId',
        'vSwitchIds'       => 'vSwitchIds',
        'vpcId'            => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcConfig) {
            $res['fcConfig'] = $this->fcConfig;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->installStatus) {
            $res['installStatus'] = $this->installStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['securityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
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
     * @return GrafanaWorkspaceVpcRegionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fcConfig'])) {
            $model->fcConfig = $map['fcConfig'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['installStatus'])) {
            $model->installStatus = $map['installStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }
        if (isset($map['securityGroupIds'])) {
            if (!empty($map['securityGroupIds'])) {
                $model->securityGroupIds = $map['securityGroupIds'];
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
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
