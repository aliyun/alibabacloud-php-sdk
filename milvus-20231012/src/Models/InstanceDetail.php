<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\components;
use AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\tags;
use AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail\vSwitchIds;

class InstanceDetail extends Model
{
    /**
     * @var bool
     */
    public $autoBackup;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var string
     */
    public $multiZoneMode;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var vSwitchIds[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoBackup' => 'autoBackup',
        'components' => 'components',
        'configuration' => 'configuration',
        'createTime' => 'createTime',
        'dbVersion' => 'dbVersion',
        'encrypted' => 'encrypted',
        'expireTime' => 'expireTime',
        'ha' => 'ha',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'kmsKeyId' => 'kmsKeyId',
        'multiZoneMode' => 'multiZoneMode',
        'orderId' => 'orderId',
        'paymentType' => 'paymentType',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'runningTime' => 'runningTime',
        'securityGroupIds' => 'securityGroupIds',
        'status' => 'status',
        'tags' => 'tags',
        'vSwitchIds' => 'vSwitchIds',
        'vpcId' => 'vpcId',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoBackup) {
            $res['autoBackup'] = $this->autoBackup;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dbVersion) {
            $res['dbVersion'] = $this->dbVersion;
        }

        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->ha) {
            $res['ha'] = $this->ha;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->multiZoneMode) {
            $res['multiZoneMode'] = $this->multiZoneMode;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runningTime) {
            $res['runningTime'] = $this->runningTime;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['securityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['securityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['vSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['vSwitchIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['autoBackup'])) {
            $model->autoBackup = $map['autoBackup'];
        }

        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1] = components::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dbVersion'])) {
            $model->dbVersion = $map['dbVersion'];
        }

        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['ha'])) {
            $model->ha = $map['ha'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['kmsKeyId'])) {
            $model->kmsKeyId = $map['kmsKeyId'];
        }

        if (isset($map['multiZoneMode'])) {
            $model->multiZoneMode = $map['multiZoneMode'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['runningTime'])) {
            $model->runningTime = $map['runningTime'];
        }

        if (isset($map['securityGroupIds'])) {
            if (!empty($map['securityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['securityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vSwitchIds'])) {
            if (!empty($map['vSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['vSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = vSwitchIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
