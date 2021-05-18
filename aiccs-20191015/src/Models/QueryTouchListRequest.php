<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class QueryTouchListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $firstTimeStart;

    /**
     * @var int
     */
    public $firstTimeEnd;

    /**
     * @var int
     */
    public $closeTimeStart;

    /**
     * @var int
     */
    public $closeTimeEnd;

    /**
     * @var int[]
     */
    public $touchId;

    /**
     * @var string[]
     */
    public $channelId;

    /**
     * @var int[]
     */
    public $channelType;

    /**
     * @var int[]
     */
    public $touchType;

    /**
     * @var int[]
     */
    public $memberId;

    /**
     * @var string[]
     */
    public $memberName;

    /**
     * @var int[]
     */
    public $servicerId;

    /**
     * @var string[]
     */
    public $servicerName;

    /**
     * @var int[]
     */
    public $queueId;

    /**
     * @var int[]
     */
    public $evaluationStatus;

    /**
     * @var int[]
     */
    public $evaluationLevel;

    /**
     * @var int[]
     */
    public $evaluationScore;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'firstTimeStart'   => 'FirstTimeStart',
        'firstTimeEnd'     => 'FirstTimeEnd',
        'closeTimeStart'   => 'CloseTimeStart',
        'closeTimeEnd'     => 'CloseTimeEnd',
        'touchId'          => 'TouchId',
        'channelId'        => 'ChannelId',
        'channelType'      => 'ChannelType',
        'touchType'        => 'TouchType',
        'memberId'         => 'MemberId',
        'memberName'       => 'MemberName',
        'servicerId'       => 'ServicerId',
        'servicerName'     => 'ServicerName',
        'queueId'          => 'QueueId',
        'evaluationStatus' => 'EvaluationStatus',
        'evaluationLevel'  => 'EvaluationLevel',
        'evaluationScore'  => 'EvaluationScore',
        'pageSize'         => 'PageSize',
        'currentPage'      => 'CurrentPage',
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
        if (null !== $this->firstTimeStart) {
            $res['FirstTimeStart'] = $this->firstTimeStart;
        }
        if (null !== $this->firstTimeEnd) {
            $res['FirstTimeEnd'] = $this->firstTimeEnd;
        }
        if (null !== $this->closeTimeStart) {
            $res['CloseTimeStart'] = $this->closeTimeStart;
        }
        if (null !== $this->closeTimeEnd) {
            $res['CloseTimeEnd'] = $this->closeTimeEnd;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->touchType) {
            $res['TouchType'] = $this->touchType;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTouchListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FirstTimeStart'])) {
            $model->firstTimeStart = $map['FirstTimeStart'];
        }
        if (isset($map['FirstTimeEnd'])) {
            $model->firstTimeEnd = $map['FirstTimeEnd'];
        }
        if (isset($map['CloseTimeStart'])) {
            $model->closeTimeStart = $map['CloseTimeStart'];
        }
        if (isset($map['CloseTimeEnd'])) {
            $model->closeTimeEnd = $map['CloseTimeEnd'];
        }
        if (isset($map['TouchId'])) {
            if (!empty($map['TouchId'])) {
                $model->touchId = $map['TouchId'];
            }
        }
        if (isset($map['ChannelId'])) {
            if (!empty($map['ChannelId'])) {
                $model->channelId = $map['ChannelId'];
            }
        }
        if (isset($map['ChannelType'])) {
            if (!empty($map['ChannelType'])) {
                $model->channelType = $map['ChannelType'];
            }
        }
        if (isset($map['TouchType'])) {
            if (!empty($map['TouchType'])) {
                $model->touchType = $map['TouchType'];
            }
        }
        if (isset($map['MemberId'])) {
            if (!empty($map['MemberId'])) {
                $model->memberId = $map['MemberId'];
            }
        }
        if (isset($map['MemberName'])) {
            if (!empty($map['MemberName'])) {
                $model->memberName = $map['MemberName'];
            }
        }
        if (isset($map['ServicerId'])) {
            if (!empty($map['ServicerId'])) {
                $model->servicerId = $map['ServicerId'];
            }
        }
        if (isset($map['ServicerName'])) {
            if (!empty($map['ServicerName'])) {
                $model->servicerName = $map['ServicerName'];
            }
        }
        if (isset($map['QueueId'])) {
            if (!empty($map['QueueId'])) {
                $model->queueId = $map['QueueId'];
            }
        }
        if (isset($map['EvaluationStatus'])) {
            if (!empty($map['EvaluationStatus'])) {
                $model->evaluationStatus = $map['EvaluationStatus'];
            }
        }
        if (isset($map['EvaluationLevel'])) {
            if (!empty($map['EvaluationLevel'])) {
                $model->evaluationLevel = $map['EvaluationLevel'];
            }
        }
        if (isset($map['EvaluationScore'])) {
            if (!empty($map['EvaluationScore'])) {
                $model->evaluationScore = $map['EvaluationScore'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
