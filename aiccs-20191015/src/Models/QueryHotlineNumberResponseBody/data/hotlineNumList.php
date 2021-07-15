<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList;
use AlibabaCloud\Tea\Model;

class hotlineNumList extends Model
{
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
     * @description 归属地
     *
     * @var string
     */
    public $location;

    /**
     * @description 运营商
     *
     * @var string
     */
    public $sp;

    /**
     * @description 是否用于入呼
     *
     * @var bool
     */
    public $inBoundEnabled;

    /**
     * @description 入呼流程id
     *
     * @var int
     */
    public $flowId;

    /**
     * @description 入呼流程名称
     *
     * @var string
     */
    public $flowName;

    /**
     * @description 是否用于外呼
     *
     * @var bool
     */
    public $outboundEnabled;

    /**
     * @description 外呼针对所有部门生效
     *
     * @var bool
     */
    public $calloutAllDepartment;

    /**
     * @description 外呼生效列表
     *
     * @var calloutRangeList[]
     */
    public $calloutRangeList;

    /**
     * @description 满意度状态
     *
     * @var int
     */
    public $evaluationStatus;
    protected $_name = [
        'hotlineNumber'        => 'HotlineNumber',
        'description'          => 'Description',
        'location'             => 'Location',
        'sp'                   => 'Sp',
        'inBoundEnabled'       => 'InBoundEnabled',
        'flowId'               => 'FlowId',
        'flowName'             => 'FlowName',
        'outboundEnabled'      => 'OutboundEnabled',
        'calloutAllDepartment' => 'CalloutAllDepartment',
        'calloutRangeList'     => 'CalloutRangeList',
        'evaluationStatus'     => 'EvaluationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
        }
        if (null !== $this->inBoundEnabled) {
            $res['InBoundEnabled'] = $this->inBoundEnabled;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->outboundEnabled) {
            $res['OutboundEnabled'] = $this->outboundEnabled;
        }
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
        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
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
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }
        if (isset($map['InBoundEnabled'])) {
            $model->inBoundEnabled = $map['InBoundEnabled'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['OutboundEnabled'])) {
            $model->outboundEnabled = $map['OutboundEnabled'];
        }
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
        if (isset($map['EvaluationStatus'])) {
            $model->evaluationStatus = $map['EvaluationStatus'];
        }

        return $model;
    }
}
