<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities\dataDisks;
use AlibabaCloud\Tea\Model;

class commodities extends Model
{
    /**
     * @description The node quantity of the type. Valid values: 1 to 1000.
     *
     * Valid values of N: 1 to 10
     * @example 2
     *
     * @var int
     */
    public $amount;

    /**
     * @description The list of data disks created with the node.
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description The instance type of the node.
     *
     * Valid values of N: 1 to 10
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The EIP billing method of the node. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * Valid values of N: 1 to 10
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound public bandwidth of the node. Unit: Mbit/s.
     *
     * Valid values of N: 1 to 10
     * @example 100
     *
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @description The network type of the node. Valid value: VPC.
     *
     * Valid values of N: 1 to 10
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The type of the node. Valid values:
     *
     *   Compute: compute node
     *   Manager: management node
     *   Login: logon node
     *
     * Valid values of N: 1 to 10
     * @example Compute
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The subscription duration of the node. Valid values:
     *
     *   If PriceUnit is set to Year, the valid values of the Period parameter are 1, 2, and 3.
     *   If PriceUnit is set to Month, the valid values of the Period parameter are 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   If PriceUnit is set to Hour, the valid value of the Period parameter is 1.
     *
     * Valid values of N: 1 to 10
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The system disk type of the node. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *
     * Valid values of N: 1 to 10
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level of the ESSD used as the system disk. This parameter takes effect only when the Commodities.N.SystemDiskCategory parameter is set to cloud_essd. Default value: PL1. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Valid values of N: 1 to 10
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The system disk size of the node. Unit: GB.
     *
     * Valid values of N: 1 to 10
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'amount'                     => 'Amount',
        'dataDisks'                  => 'DataDisks',
        'instanceType'               => 'InstanceType',
        'internetChargeType'         => 'InternetChargeType',
        'internetMaxBandWidthOut'    => 'InternetMaxBandWidthOut',
        'networkType'                => 'NetworkType',
        'nodeType'                   => 'NodeType',
        'period'                     => 'Period',
        'systemDiskCategory'         => 'SystemDiskCategory',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize'             => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandWidthOut) {
            $res['InternetMaxBandWidthOut'] = $this->internetMaxBandWidthOut;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandWidthOut'])) {
            $model->internetMaxBandWidthOut = $map['InternetMaxBandWidthOut'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
