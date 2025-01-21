<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceVpcRegionDetail extends Model
{
    /**
     * @var string
     */
    public $fcConfig;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $installStatus;
    /**
     * @var string
     */
    public $name;
    /**
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
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->securityGroupIds)) {
                $res['securityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['securityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['vSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['vSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['securityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
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
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['vSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
