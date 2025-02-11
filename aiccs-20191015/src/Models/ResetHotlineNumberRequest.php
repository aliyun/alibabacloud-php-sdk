<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberRequest\outboundRangeList;

class ResetHotlineNumberRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enableInbound;
    /**
     * @var bool
     */
    public $enableInboundEvaluation;
    /**
     * @var bool
     */
    public $enableOutbound;
    /**
     * @var bool
     */
    public $enableOutboundEvaluation;
    /**
     * @var int
     */
    public $evaluationLevel;
    /**
     * @var string
     */
    public $hotlineNumber;
    /**
     * @var int
     */
    public $inboundFlowId;
    /**
     * @var string
     */
    public $instanceId;
    /**
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
        if (\is_array($this->outboundRangeList)) {
            Model::validateArray($this->outboundRangeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->outboundRangeList)) {
                $res['OutboundRangeList'] = [];
                $n1                       = 0;
                foreach ($this->outboundRangeList as $item1) {
                    $res['OutboundRangeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                       = 0;
                foreach ($map['OutboundRangeList'] as $item1) {
                    $model->outboundRangeList[$n1++] = outboundRangeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
