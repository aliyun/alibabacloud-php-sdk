<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class commodities extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $internetMaxBandWidthOut;
    protected $_name = [
        'amount'                  => 'Amount',
        'systemDiskSize'          => 'SystemDiskSize',
        'nodeType'                => 'NodeType',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'internetChargeType'      => 'InternetChargeType',
        'networkType'             => 'NetworkType',
        'instanceType'            => 'InstanceType',
        'period'                  => 'Period',
        'internetMaxBandWidthOut' => 'InternetMaxBandWidthOut',
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
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->internetMaxBandWidthOut) {
            $res['InternetMaxBandWidthOut'] = $this->internetMaxBandWidthOut;
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['InternetMaxBandWidthOut'])) {
            $model->internetMaxBandWidthOut = $map['InternetMaxBandWidthOut'];
        }

        return $model;
    }
}
