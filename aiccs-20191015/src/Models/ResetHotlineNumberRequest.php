<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberRequest\outboundRangeList;
use AlibabaCloud\Tea\Model;

class ResetHotlineNumberRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 号码
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @description 号码描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否用于入呼
     *
     * @var bool
     */
    public $enableInbound;

    /**
     * @description 入呼ivr流程id
     *
     * @var int
     */
    public $inboundFlowId;

    /**
     * @description 是否用于外呼
     *
     * @var bool
     */
    public $enableOutbound;

    /**
     * @description 外呼是否对所有部门生效
     *
     * @var bool
     */
    public $outboundAllDepart;

    /**
     * @description 是否开启入呼满意度
     *
     * @var bool
     */
    public $enableInboundEvaluation;

    /**
     * @description 是否开启外呼满意度
     *
     * @var bool
     */
    public $enableOutboundEvaluation;

    /**
     * @description 满意度等级
     *
     * @var int
     */
    public $evaluationLevel;

    /**
     * @description 外呼生效范围
     *
     * @var outboundRangeList[]
     */
    public $outboundRangeList;
    protected $_name = [
        'instanceId'               => 'InstanceId',
        'hotlineNumber'            => 'HotlineNumber',
        'description'              => 'Description',
        'enableInbound'            => 'EnableInbound',
        'inboundFlowId'            => 'InboundFlowId',
        'enableOutbound'           => 'EnableOutbound',
        'outboundAllDepart'        => 'OutboundAllDepart',
        'enableInboundEvaluation'  => 'EnableInboundEvaluation',
        'enableOutboundEvaluation' => 'EnableOutboundEvaluation',
        'evaluationLevel'          => 'EvaluationLevel',
        'outboundRangeList'        => 'OutboundRangeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableInbound) {
            $res['EnableInbound'] = $this->enableInbound;
        }
        if (null !== $this->inboundFlowId) {
            $res['InboundFlowId'] = $this->inboundFlowId;
        }
        if (null !== $this->enableOutbound) {
            $res['EnableOutbound'] = $this->enableOutbound;
        }
        if (null !== $this->outboundAllDepart) {
            $res['OutboundAllDepart'] = $this->outboundAllDepart;
        }
        if (null !== $this->enableInboundEvaluation) {
            $res['EnableInboundEvaluation'] = $this->enableInboundEvaluation;
        }
        if (null !== $this->enableOutboundEvaluation) {
            $res['EnableOutboundEvaluation'] = $this->enableOutboundEvaluation;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->outboundRangeList) {
            $res['OutboundRangeList'] = [];
            if (null !== $this->outboundRangeList && \is_array($this->outboundRangeList)) {
                $n = 0;
                foreach ($this->outboundRangeList as $item) {
                    $res['OutboundRangeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetHotlineNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableInbound'])) {
            $model->enableInbound = $map['EnableInbound'];
        }
        if (isset($map['InboundFlowId'])) {
            $model->inboundFlowId = $map['InboundFlowId'];
        }
        if (isset($map['EnableOutbound'])) {
            $model->enableOutbound = $map['EnableOutbound'];
        }
        if (isset($map['OutboundAllDepart'])) {
            $model->outboundAllDepart = $map['OutboundAllDepart'];
        }
        if (isset($map['EnableInboundEvaluation'])) {
            $model->enableInboundEvaluation = $map['EnableInboundEvaluation'];
        }
        if (isset($map['EnableOutboundEvaluation'])) {
            $model->enableOutboundEvaluation = $map['EnableOutboundEvaluation'];
        }
        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }
        if (isset($map['OutboundRangeList'])) {
            if (!empty($map['OutboundRangeList'])) {
                $model->outboundRangeList = [];
                $n                        = 0;
                foreach ($map['OutboundRangeList'] as $item) {
                    $model->outboundRangeList[$n++] = null !== $item ? outboundRangeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
