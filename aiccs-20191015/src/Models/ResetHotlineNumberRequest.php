<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberRequest\outboundRangeList;
use AlibabaCloud\Tea\Model;

class ResetHotlineNumberRequest extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableInbound;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableInboundEvaluation;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableOutbound;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableOutboundEvaluation;

    /**
     * @example 2
     *
     * @var int
     */
    public $evaluationLevel;

    /**
     * @example 0571********
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @example 123456
     *
     * @var int
     */
    public $inboundFlowId;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $outboundAllDepart;

    /**
     * @var outboundRangeList[]
     */
    public $outboundRangeList;
    protected $_name = [
        'description'              => 'Description',
        'enableInbound'            => 'EnableInbound',
        'enableInboundEvaluation'  => 'EnableInboundEvaluation',
        'enableOutbound'           => 'EnableOutbound',
        'enableOutboundEvaluation' => 'EnableOutboundEvaluation',
        'evaluationLevel'          => 'EvaluationLevel',
        'hotlineNumber'            => 'HotlineNumber',
        'inboundFlowId'            => 'InboundFlowId',
        'instanceId'               => 'InstanceId',
        'outboundAllDepart'        => 'OutboundAllDepart',
        'outboundRangeList'        => 'OutboundRangeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableInbound) {
            $res['EnableInbound'] = $this->enableInbound;
        }
        if (null !== $this->enableInboundEvaluation) {
            $res['EnableInboundEvaluation'] = $this->enableInboundEvaluation;
        }
        if (null !== $this->enableOutbound) {
            $res['EnableOutbound'] = $this->enableOutbound;
        }
        if (null !== $this->enableOutboundEvaluation) {
            $res['EnableOutboundEvaluation'] = $this->enableOutboundEvaluation;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->inboundFlowId) {
            $res['InboundFlowId'] = $this->inboundFlowId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundAllDepart) {
            $res['OutboundAllDepart'] = $this->outboundAllDepart;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableInbound'])) {
            $model->enableInbound = $map['EnableInbound'];
        }
        if (isset($map['EnableInboundEvaluation'])) {
            $model->enableInboundEvaluation = $map['EnableInboundEvaluation'];
        }
        if (isset($map['EnableOutbound'])) {
            $model->enableOutbound = $map['EnableOutbound'];
        }
        if (isset($map['EnableOutboundEvaluation'])) {
            $model->enableOutboundEvaluation = $map['EnableOutboundEvaluation'];
        }
        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['InboundFlowId'])) {
            $model->inboundFlowId = $map['InboundFlowId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundAllDepart'])) {
            $model->outboundAllDepart = $map['OutboundAllDepart'];
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
