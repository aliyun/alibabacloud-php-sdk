<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest\components;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest\tags;
use AlibabaCloud\SDK\Milvus\V20231012\Models\CreateInstanceRequest\vSwitchIds;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

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
    public $dbAdminPassword;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var bool
     */
    public $ha;

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
     * @var int
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

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

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId' => 'RegionId',
        'autoBackup' => 'autoBackup',
        'components' => 'components',
        'configuration' => 'configuration',
        'dbAdminPassword' => 'dbAdminPassword',
        'dbVersion' => 'dbVersion',
        'encrypted' => 'encrypted',
        'ha' => 'ha',
        'instanceName' => 'instanceName',
        'kmsKeyId' => 'kmsKeyId',
        'multiZoneMode' => 'multiZoneMode',
        'paymentDuration' => 'paymentDuration',
        'paymentDurationUnit' => 'paymentDurationUnit',
        'paymentType' => 'paymentType',
        'resourceGroupId' => 'resourceGroupId',
        'tags' => 'tags',
        'vSwitchIds' => 'vSwitchIds',
        'vpcId' => 'vpcId',
        'zoneId' => 'zoneId',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

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

        if (null !== $this->dbAdminPassword) {
            $res['dbAdminPassword'] = $this->dbAdminPassword;
        }

        if (null !== $this->dbVersion) {
            $res['dbVersion'] = $this->dbVersion;
        }

        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }

        if (null !== $this->ha) {
            $res['ha'] = $this->ha;
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

        if (null !== $this->paymentDuration) {
            $res['paymentDuration'] = $this->paymentDuration;
        }

        if (null !== $this->paymentDurationUnit) {
            $res['paymentDurationUnit'] = $this->paymentDurationUnit;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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

        if (isset($map['dbAdminPassword'])) {
            $model->dbAdminPassword = $map['dbAdminPassword'];
        }

        if (isset($map['dbVersion'])) {
            $model->dbVersion = $map['dbVersion'];
        }

        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }

        if (isset($map['ha'])) {
            $model->ha = $map['ha'];
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

        if (isset($map['paymentDuration'])) {
            $model->paymentDuration = $map['paymentDuration'];
        }

        if (isset($map['paymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['paymentDurationUnit'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
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

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
