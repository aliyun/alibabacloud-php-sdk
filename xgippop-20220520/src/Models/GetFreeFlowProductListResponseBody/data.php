<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetFreeFlowProductListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 产品当前状态，true为已配置，false为未配置
     *
     * @var bool
     */
    public $configured;

    /**
     * @description 产品包含的流量大小
     *
     * @var string
     */
    public $flowProductAmount;

    /**
     * @description 免流产品ID
     *
     * @var string
     */
    public $flowProductId;

    /**
     * @description 流量包名称
     *
     * @var string
     */
    public $flowProductName;

    /**
     * @description 产品周期
     *
     * @var string
     */
    public $flowProductPeriod;

    /**
     * @description 取值包括free（定向流量）/normal（通用流量）
     *
     * @var string
     */
    public $flowType;

    /**
     * @description 取值包括cm（中国移动）/ct（中国电信）/cu（中国联通）
     *
     * @var string
     */
    public $operator;

    /**
     * @description 注意这里返回的全量套餐里，只能包含SpecType与该InstanceId的SpecType相同的规格
     *
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
