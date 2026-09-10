<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetDataCheckTaskListRequest extends Model
{
    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $createEndTime;

    /**
     * @var string
     */
    public $createStartTime;

    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var int
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $updateEndTime;

    /**
     * @var string
     */
    public $updateStartTime;
    protected $_name = [
        'checkResult' => 'checkResult',
        'checkType' => 'checkType',
        'createEndTime' => 'createEndTime',
        'createStartTime' => 'createStartTime',
        'execStatus' => 'execStatus',
        'isScheduled' => 'isScheduled',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'taskName' => 'taskName',
        'templateName' => 'templateName',
        'updateEndTime' => 'updateEndTime',
        'updateStartTime' => 'updateStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }

        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }

        if (null !== $this->execStatus) {
            $res['execStatus'] = $this->execStatus;
        }

        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->updateEndTime) {
            $res['updateEndTime'] = $this->updateEndTime;
        }

        if (null !== $this->updateStartTime) {
            $res['updateStartTime'] = $this->updateStartTime;
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
        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }

        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }

        if (isset($map['execStatus'])) {
            $model->execStatus = $map['execStatus'];
        }

        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['updateEndTime'])) {
            $model->updateEndTime = $map['updateEndTime'];
        }

        if (isset($map['updateStartTime'])) {
            $model->updateStartTime = $map['updateStartTime'];
        }

        return $model;
    }
}
