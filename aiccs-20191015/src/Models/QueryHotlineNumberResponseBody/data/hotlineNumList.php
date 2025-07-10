<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList;

class hotlineNumList extends Model
{
    /**
     * @var bool
     */
    public $calloutAllDepartment;

    /**
     * @var calloutRangeList[]
     */
    public $calloutRangeList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $evaluationStatus;

    /**
     * @var int
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $hotlineNumber;

    /**
     * @var bool
     */
    public $inBoundEnabled;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $outboundEnabled;

    /**
     * @var string
     */
    public $sp;
    protected $_name = [
        'calloutAllDepartment' => 'CalloutAllDepartment',
        'calloutRangeList' => 'CalloutRangeList',
        'description' => 'Description',
        'evaluationStatus' => 'EvaluationStatus',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'hotlineNumber' => 'HotlineNumber',
        'inBoundEnabled' => 'InBoundEnabled',
        'location' => 'Location',
        'outboundEnabled' => 'OutboundEnabled',
        'sp' => 'Sp',
    ];

    public function validate()
    {
        if (\is_array($this->calloutRangeList)) {
            Model::validateArray($this->calloutRangeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calloutAllDepartment) {
            $res['CalloutAllDepartment'] = $this->calloutAllDepartment;
        }

        if (null !== $this->calloutRangeList) {
            if (\is_array($this->calloutRangeList)) {
                $res['CalloutRangeList'] = [];
                $n1 = 0;
                foreach ($this->calloutRangeList as $item1) {
                    $res['CalloutRangeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }

        if (null !== $this->inBoundEnabled) {
            $res['InBoundEnabled'] = $this->inBoundEnabled;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->outboundEnabled) {
            $res['OutboundEnabled'] = $this->outboundEnabled;
        }

        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
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
        if (isset($map['CalloutAllDepartment'])) {
            $model->calloutAllDepartment = $map['CalloutAllDepartment'];
        }

        if (isset($map['CalloutRangeList'])) {
            if (!empty($map['CalloutRangeList'])) {
                $model->calloutRangeList = [];
                $n1 = 0;
                foreach ($map['CalloutRangeList'] as $item1) {
                    $model->calloutRangeList[$n1] = calloutRangeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EvaluationStatus'])) {
            $model->evaluationStatus = $map['EvaluationStatus'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }

        if (isset($map['InBoundEnabled'])) {
            $model->inBoundEnabled = $map['InBoundEnabled'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['OutboundEnabled'])) {
            $model->outboundEnabled = $map['OutboundEnabled'];
        }

        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }

        return $model;
    }
}
