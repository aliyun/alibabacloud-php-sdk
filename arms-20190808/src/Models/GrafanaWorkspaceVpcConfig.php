<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceVpcConfig extends Model
{
    /**
     * @example fc、ansm
     *
     * @var string
     */
    public $fcConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $installMsg;

    /**
     * @example CreateSucceed
     *
     * @var string
     */
    public $installStatus;

    /**
     * @example 北京VPC-A通道
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
     * @example sg-6we94uvybteyc******
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example 10983***********
     *
     * @var string
     */
    public $userId;

    /**
     * @example vsw-6we3**********
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-6wehr2x**********
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'fcConfig'        => 'fcConfig',
        'id'              => 'id',
        'installMsg'      => 'installMsg',
        'installStatus'   => 'installStatus',
        'name'            => 'name',
        'regionId'        => 'regionId',
        'securityGroupId' => 'securityGroupId',
        'userId'          => 'userId',
        'vSwitchId'       => 'vSwitchId',
        'vpcId'           => 'vpcId',
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
        if (null !== $this->installMsg) {
            $res['installMsg'] = $this->installMsg;
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
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceVpcConfig
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
        if (isset($map['installMsg'])) {
            $model->installMsg = $map['installMsg'];
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
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
