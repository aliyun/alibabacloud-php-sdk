<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetAiOutboundTaskExecDetailRequest extends Model
{
    /**
     * @var int
     */
    public $batchVersion;

    /**
     * @var int
     */
    public $caseId;

    /**
     * @var int
     */
    public $caseStatus;

    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchVersion' => 'BatchVersion',
        'caseId' => 'CaseId',
        'caseStatus' => 'CaseStatus',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'currentPage' => 'CurrentPage',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'phoneNum' => 'PhoneNum',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchVersion) {
            $res['BatchVersion'] = $this->batchVersion;
        }

        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }

        if (null !== $this->caseStatus) {
            $res['CaseStatus'] = $this->caseStatus;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BatchVersion'])) {
            $model->batchVersion = $map['BatchVersion'];
        }

        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }

        if (isset($map['CaseStatus'])) {
            $model->caseStatus = $map['CaseStatus'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
