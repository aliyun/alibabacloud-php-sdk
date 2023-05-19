<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic renewal.
     * - false: disables automatic renewal for the instance. This is the default value.
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The automatic renewal period of the instance. This parameter is required when the AutoRenew parameter is set to true. Valid values:
     * - If the PeriodUnit parameter is set to Month: "1", "2", "3", "6", and "12".
     * @example 2
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The billing method of the instance. Valid values:
     * - PostPay: the pay-as-you-go billing method. This is the default value. By default, fees are charged on an hourly basis.
     * @example PrePay
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The size of the storage space,in GB.
     * The preceding minimum storage space sizes are the default storage space sizes of the corresponding cluster specification plans.
     * @example 200
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The return result of the request.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The specifications of the cluster.
     * - 62C400GB: indicates 62 CPU cores and 400 GB of memory.
     * @example 14C70GB
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The name of the OceanBase cluster.
     * If this parameter is not specified, the value is the instance ID of the cluster by default.
     * @example amap_aos_tx_ob
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description OceanBase Server version number.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $obVersion;

    /**
     * @description The valid duration of the purchased resources. The unit is specified by the PeriodUnit parameter.
     * - When the PeriodUnit parameter is set to Year: "1", "2", "3".
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the valid duration of the purchased resources.
     * Default value: Month for subscription, and Hour for pay-as-you-go.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The series of the OceanBase cluster. Valid values:
     * - history: History Database Cluster Edition.
     * @example Normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The ID of the zone to which the instance belongs.
     * For more information about how to obtain the list of zones, see [DescribeZones](~~25610~~).
     * @example cn-hangzhou-h,cn-hangzhou-i,cn-hangzhou-j
     *
     * @var string
     */
    public $zones;
    protected $_name = [
        'autoRenew'       => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'chargeType'      => 'ChargeType',
        'diskSize'        => 'DiskSize',
        'diskType'        => 'DiskType',
        'instanceClass'   => 'InstanceClass',
        'instanceName'    => 'InstanceName',
        'obVersion'       => 'ObVersion',
        'period'          => 'Period',
        'periodUnit'      => 'PeriodUnit',
        'resourceGroupId' => 'ResourceGroupId',
        'series'          => 'Series',
        'zones'           => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Zones'])) {
            $model->zones = $map['Zones'];
        }

        return $model;
    }
}
