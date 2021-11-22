<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceEntryRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceEntryDescription;

    /**
     * @var string
     */
    public $serviceEntryName;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'dryRun'                  => 'DryRun',
        'ioTCloudConnectorId'     => 'IoTCloudConnectorId',
        'regionId'                => 'RegionId',
        'serviceEntryDescription' => 'ServiceEntryDescription',
        'serviceEntryName'        => 'ServiceEntryName',
        'serviceId'               => 'ServiceId',
        'target'                  => 'Target',
        'targetType'              => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceEntryDescription) {
            $res['ServiceEntryDescription'] = $this->serviceEntryDescription;
        }
        if (null !== $this->serviceEntryName) {
            $res['ServiceEntryName'] = $this->serviceEntryName;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceEntryDescription'])) {
            $model->serviceEntryDescription = $map['ServiceEntryDescription'];
        }
        if (isset($map['ServiceEntryName'])) {
            $model->serviceEntryName = $map['ServiceEntryName'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
