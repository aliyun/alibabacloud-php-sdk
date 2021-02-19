<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaiAllRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $eaiInstanceType;

    /**
     * @var string
     */
    public $clientVSwitchId;

    /**
     * @var string
     */
    public $clientSecurityGroupId;

    /**
     * @var string
     */
    public $clientImageId;

    /**
     * @var string
     */
    public $clientInstanceType;

    /**
     * @var string
     */
    public $clientZoneId;

    /**
     * @var string
     */
    public $clientInstanceName;

    /**
     * @var string
     */
    public $clientPassword;

    /**
     * @var int
     */
    public $clientInternetMaxBandwidthIn;

    /**
     * @var int
     */
    public $clientInternetMaxBandwidthOut;

    /**
     * @var string
     */
    public $clientSystemDiskCategory;

    /**
     * @var int
     */
    public $clientSystemDiskSize;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'eaiInstanceType'               => 'EaiInstanceType',
        'clientVSwitchId'               => 'ClientVSwitchId',
        'clientSecurityGroupId'         => 'ClientSecurityGroupId',
        'clientImageId'                 => 'ClientImageId',
        'clientInstanceType'            => 'ClientInstanceType',
        'clientZoneId'                  => 'ClientZoneId',
        'clientInstanceName'            => 'ClientInstanceName',
        'clientPassword'                => 'ClientPassword',
        'clientInternetMaxBandwidthIn'  => 'ClientInternetMaxBandwidthIn',
        'clientInternetMaxBandwidthOut' => 'ClientInternetMaxBandwidthOut',
        'clientSystemDiskCategory'      => 'ClientSystemDiskCategory',
        'clientSystemDiskSize'          => 'ClientSystemDiskSize',
        'clientToken'                   => 'ClientToken',
        'instanceName'                  => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->eaiInstanceType) {
            $res['EaiInstanceType'] = $this->eaiInstanceType;
        }
        if (null !== $this->clientVSwitchId) {
            $res['ClientVSwitchId'] = $this->clientVSwitchId;
        }
        if (null !== $this->clientSecurityGroupId) {
            $res['ClientSecurityGroupId'] = $this->clientSecurityGroupId;
        }
        if (null !== $this->clientImageId) {
            $res['ClientImageId'] = $this->clientImageId;
        }
        if (null !== $this->clientInstanceType) {
            $res['ClientInstanceType'] = $this->clientInstanceType;
        }
        if (null !== $this->clientZoneId) {
            $res['ClientZoneId'] = $this->clientZoneId;
        }
        if (null !== $this->clientInstanceName) {
            $res['ClientInstanceName'] = $this->clientInstanceName;
        }
        if (null !== $this->clientPassword) {
            $res['ClientPassword'] = $this->clientPassword;
        }
        if (null !== $this->clientInternetMaxBandwidthIn) {
            $res['ClientInternetMaxBandwidthIn'] = $this->clientInternetMaxBandwidthIn;
        }
        if (null !== $this->clientInternetMaxBandwidthOut) {
            $res['ClientInternetMaxBandwidthOut'] = $this->clientInternetMaxBandwidthOut;
        }
        if (null !== $this->clientSystemDiskCategory) {
            $res['ClientSystemDiskCategory'] = $this->clientSystemDiskCategory;
        }
        if (null !== $this->clientSystemDiskSize) {
            $res['ClientSystemDiskSize'] = $this->clientSystemDiskSize;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaiAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EaiInstanceType'])) {
            $model->eaiInstanceType = $map['EaiInstanceType'];
        }
        if (isset($map['ClientVSwitchId'])) {
            $model->clientVSwitchId = $map['ClientVSwitchId'];
        }
        if (isset($map['ClientSecurityGroupId'])) {
            $model->clientSecurityGroupId = $map['ClientSecurityGroupId'];
        }
        if (isset($map['ClientImageId'])) {
            $model->clientImageId = $map['ClientImageId'];
        }
        if (isset($map['ClientInstanceType'])) {
            $model->clientInstanceType = $map['ClientInstanceType'];
        }
        if (isset($map['ClientZoneId'])) {
            $model->clientZoneId = $map['ClientZoneId'];
        }
        if (isset($map['ClientInstanceName'])) {
            $model->clientInstanceName = $map['ClientInstanceName'];
        }
        if (isset($map['ClientPassword'])) {
            $model->clientPassword = $map['ClientPassword'];
        }
        if (isset($map['ClientInternetMaxBandwidthIn'])) {
            $model->clientInternetMaxBandwidthIn = $map['ClientInternetMaxBandwidthIn'];
        }
        if (isset($map['ClientInternetMaxBandwidthOut'])) {
            $model->clientInternetMaxBandwidthOut = $map['ClientInternetMaxBandwidthOut'];
        }
        if (isset($map['ClientSystemDiskCategory'])) {
            $model->clientSystemDiskCategory = $map['ClientSystemDiskCategory'];
        }
        if (isset($map['ClientSystemDiskSize'])) {
            $model->clientSystemDiskSize = $map['ClientSystemDiskSize'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
