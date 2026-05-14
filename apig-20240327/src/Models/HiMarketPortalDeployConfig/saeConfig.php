<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketPortalDeployConfig;

use AlibabaCloud\Dara\Model;

class saeConfig extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $oidcRoleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId' => 'appId',
        'namespaceId' => 'namespaceId',
        'oidcRoleName' => 'oidcRoleName',
        'regionId' => 'regionId',
        'replicas' => 'replicas',
        'securityGroupId' => 'securityGroupId',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }

        if (null !== $this->oidcRoleName) {
            $res['oidcRoleName'] = $this->oidcRoleName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['replicas'] = $this->replicas;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }

        if (isset($map['oidcRoleName'])) {
            $model->oidcRoleName = $map['oidcRoleName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['replicas'])) {
            $model->replicas = $map['replicas'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
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
