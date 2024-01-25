<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetAiopsEventListRequest extends Model
{
    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $businessGroupName;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventUniqueId;

    /**
     * @var int
     */
    public $feedbackStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $predictionState;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'businessGroupId'   => 'BusinessGroupId',
        'businessGroupName' => 'BusinessGroupName',
        'currentPage'       => 'CurrentPage',
        'eventType'         => 'EventType',
        'eventUniqueId'     => 'EventUniqueId',
        'feedbackStatus'    => 'FeedbackStatus',
        'name'              => 'Name',
        'operaUid'          => 'OperaUid',
        'pageSize'          => 'PageSize',
        'predictionState'   => 'PredictionState',
        'severity'          => 'Severity',
        'status'            => 'Status',
        'uid'               => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->businessGroupName) {
            $res['BusinessGroupName'] = $this->businessGroupName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventUniqueId) {
            $res['EventUniqueId'] = $this->eventUniqueId;
        }
        if (null !== $this->feedbackStatus) {
            $res['FeedbackStatus'] = $this->feedbackStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->predictionState) {
            $res['PredictionState'] = $this->predictionState;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAiopsEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['BusinessGroupName'])) {
            $model->businessGroupName = $map['BusinessGroupName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventUniqueId'])) {
            $model->eventUniqueId = $map['EventUniqueId'];
        }
        if (isset($map['FeedbackStatus'])) {
            $model->feedbackStatus = $map['FeedbackStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PredictionState'])) {
            $model->predictionState = $map['PredictionState'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
