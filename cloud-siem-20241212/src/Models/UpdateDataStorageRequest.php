<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataStorageRequest extends Model
{
    /**
     * @var int
     */
    public $configurationVersion;

    /**
     * @var string
     */
    public $dataStorageRegionId;

    /**
     * @var string
     */
    public $deliveryStatus;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $multiAccountDeliveryEnabled;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $targetProject;
    protected $_name = [
        'configurationVersion' => 'ConfigurationVersion',
        'dataStorageRegionId' => 'DataStorageRegionId',
        'deliveryStatus' => 'DeliveryStatus',
        'lang' => 'Lang',
        'multiAccountDeliveryEnabled' => 'MultiAccountDeliveryEnabled',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'targetProject' => 'TargetProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationVersion) {
            $res['ConfigurationVersion'] = $this->configurationVersion;
        }

        if (null !== $this->dataStorageRegionId) {
            $res['DataStorageRegionId'] = $this->dataStorageRegionId;
        }

        if (null !== $this->deliveryStatus) {
            $res['DeliveryStatus'] = $this->deliveryStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->multiAccountDeliveryEnabled) {
            $res['MultiAccountDeliveryEnabled'] = $this->multiAccountDeliveryEnabled;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->targetProject) {
            $res['TargetProject'] = $this->targetProject;
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
        if (isset($map['ConfigurationVersion'])) {
            $model->configurationVersion = $map['ConfigurationVersion'];
        }

        if (isset($map['DataStorageRegionId'])) {
            $model->dataStorageRegionId = $map['DataStorageRegionId'];
        }

        if (isset($map['DeliveryStatus'])) {
            $model->deliveryStatus = $map['DeliveryStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MultiAccountDeliveryEnabled'])) {
            $model->multiAccountDeliveryEnabled = $map['MultiAccountDeliveryEnabled'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['TargetProject'])) {
            $model->targetProject = $map['TargetProject'];
        }

        return $model;
    }
}
