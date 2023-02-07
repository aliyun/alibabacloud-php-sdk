<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList;
use AlibabaCloud\Tea\Model;

class hotlineNumList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $calloutAllDepartment;

    /**
     * @var calloutRangeList[]
     */
    public $calloutRangeList;

    /**
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @example 0
     *
     * @var int
     */
    public $evaluationStatus;

    /**
     * @example 12
     *
     * @var int
     */
    public $flowId;

    /**
     * @example 测试流程
     *
     * @var string
     */
    public $flowName;

    /**
     * @example 0571****2211
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $inBoundEnabled;

    /**
     * @example 浙江杭州
     *
     * @var string
     */
    public $location;

    /**
     * @example true
     *
     * @var bool
     */
    public $outboundEnabled;

    /**
     * @example 电信
     *
     * @var string
     */
    public $sp;
    protected $_name = [
        'calloutAllDepartment' => 'CalloutAllDepartment',
        'calloutRangeList'     => 'CalloutRangeList',
        'description'          => 'Description',
        'evaluationStatus'     => 'EvaluationStatus',
        'flowId'               => 'FlowId',
        'flowName'             => 'FlowName',
        'hotlineNumber'        => 'HotlineNumber',
        'inBoundEnabled'       => 'InBoundEnabled',
        'location'             => 'Location',
        'outboundEnabled'      => 'OutboundEnabled',
        'sp'                   => 'Sp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calloutAllDepartment) {
            $res['CalloutAllDepartment'] = $this->calloutAllDepartment;
        }
        if (null !== $this->calloutRangeList) {
            $res['CalloutRangeList'] = [];
            if (null !== $this->calloutRangeList && \is_array($this->calloutRangeList)) {
                $n = 0;
                foreach ($this->calloutRangeList as $item) {
                    $res['CalloutRangeList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return hotlineNumList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalloutAllDepartment'])) {
            $model->calloutAllDepartment = $map['CalloutAllDepartment'];
        }
        if (isset($map['CalloutRangeList'])) {
            if (!empty($map['CalloutRangeList'])) {
                $model->calloutRangeList = [];
                $n                       = 0;
                foreach ($map['CalloutRangeList'] as $item) {
                    $model->calloutRangeList[$n++] = null !== $item ? calloutRangeList::fromMap($item) : $item;
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
