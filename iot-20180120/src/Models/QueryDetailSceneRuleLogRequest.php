<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDetailSceneRuleLogRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'endTime'       => 'EndTime',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'ruleId'        => 'RuleId',
        'startTime'     => 'StartTime',
        'traceId'       => 'TraceId',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('traceId', $this->traceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDetailSceneRuleLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
