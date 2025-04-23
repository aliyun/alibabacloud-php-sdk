<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities\dataDisks;

class commodities extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'amount' => 'Amount',
        'dataDisks' => 'DataDisks',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandWidthOut' => 'InternetMaxBandWidthOut',
        'networkType' => 'NetworkType',
        'nodeType' => 'NodeType',
        'period' => 'Period',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskPerformanceLevel' => 'SystemDiskPerformanceLevel',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisks)) {
            Model::validateArray($this->dataDisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->dataDisks) {
            if (\is_array($this->dataDisks)) {
                $res['DataDisks'] = [];
                $n1 = 0;
                foreach ($this->dataDisks as $item1) {
                    $res['DataDisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n1 = 0;
                foreach ($map['DataDisks'] as $item1) {
                    $model->dataDisks[$n1++] = dataDisks::fromMap($item1);
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
