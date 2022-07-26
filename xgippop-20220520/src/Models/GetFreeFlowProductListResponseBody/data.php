<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowProductListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $configured;

    /**
     * @var string
     */
    public $flowProductAmount;

    /**
     * @var string
     */
    public $flowProductId;

    /**
     * @var string
     */
    public $flowProductName;

    /**
     * @var string
     */
    public $flowProductPeriod;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $spid;

    /**
     * @var int
     */
    public $unitPrice;
    protected $_name = [
        'configured'        => 'Configured',
        'flowProductAmount' => 'FlowProductAmount',
        'flowProductId'     => 'FlowProductId',
        'flowProductName'   => 'FlowProductName',
        'flowProductPeriod' => 'FlowProductPeriod',
        'flowType'          => 'FlowType',
        'operator'          => 'Operator',
        'specType'          => 'SpecType',
        'spid'              => 'Spid',
        'unitPrice'         => 'UnitPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }
        if (null !== $this->flowProductAmount) {
            $res['FlowProductAmount'] = $this->flowProductAmount;
        }
        if (null !== $this->flowProductId) {
            $res['FlowProductId'] = $this->flowProductId;
        }
        if (null !== $this->flowProductName) {
            $res['FlowProductName'] = $this->flowProductName;
        }
        if (null !== $this->flowProductPeriod) {
            $res['FlowProductPeriod'] = $this->flowProductPeriod;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->spid) {
            $res['Spid'] = $this->spid;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }
        if (isset($map['FlowProductAmount'])) {
            $model->flowProductAmount = $map['FlowProductAmount'];
        }
        if (isset($map['FlowProductId'])) {
            $model->flowProductId = $map['FlowProductId'];
        }
        if (isset($map['FlowProductName'])) {
            $model->flowProductName = $map['FlowProductName'];
        }
        if (isset($map['FlowProductPeriod'])) {
            $model->flowProductPeriod = $map['FlowProductPeriod'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['Spid'])) {
            $model->spid = $map['Spid'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }

        return $model;
    }
}
