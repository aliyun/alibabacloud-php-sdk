<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarRecordsRequest extends Model
{
    /**
     * @var int
     */
    public $completedBeginTime;

    /**
     * @var int
     */
    public $completedEndTime;

    /**
     * @var int
     */
    public $endMillis;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $queryValue;

    /**
     * @var string
     */
    public $requestUuid;

    /**
     * @var int
     */
    public $startMillis;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskflowMd5;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'completedBeginTime' => 'CompletedBeginTime',
        'completedEndTime' => 'CompletedEndTime',
        'endMillis' => 'EndMillis',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'playbookUuid' => 'PlaybookUuid',
        'queryValue' => 'QueryValue',
        'requestUuid' => 'RequestUuid',
        'startMillis' => 'StartMillis',
        'taskStatus' => 'TaskStatus',
        'taskflowMd5' => 'TaskflowMd5',
        'triggerType' => 'TriggerType',
        'triggerUser' => 'TriggerUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedBeginTime) {
            $res['CompletedBeginTime'] = $this->completedBeginTime;
        }

        if (null !== $this->completedEndTime) {
            $res['CompletedEndTime'] = $this->completedEndTime;
        }

        if (null !== $this->endMillis) {
            $res['EndMillis'] = $this->endMillis;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->queryValue) {
            $res['QueryValue'] = $this->queryValue;
        }

        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }

        if (null !== $this->startMillis) {
            $res['StartMillis'] = $this->startMillis;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
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
        if (isset($map['CompletedBeginTime'])) {
            $model->completedBeginTime = $map['CompletedBeginTime'];
        }

        if (isset($map['CompletedEndTime'])) {
            $model->completedEndTime = $map['CompletedEndTime'];
        }

        if (isset($map['EndMillis'])) {
            $model->endMillis = $map['EndMillis'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['QueryValue'])) {
            $model->queryValue = $map['QueryValue'];
        }

        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        if (isset($map['StartMillis'])) {
            $model->startMillis = $map['StartMillis'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
