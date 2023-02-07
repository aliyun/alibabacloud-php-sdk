<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetAiOutboundTaskExecDetailRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchVersion;

    /**
     * @example 123456
     *
     * @var int
     */
    public $caseId;

    /**
     * @example 1
     *
     * @var int
     */
    public $caseStatus;

    /**
     * @example 1632290119000
     *
     * @var int
     */
    public $createTimeEnd;

    /**
     * @example 1632289999000
     *
     * @var int
     */
    public $createTimeStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example agent_***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 150****000
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @example 123456
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchVersion'    => 'BatchVersion',
        'caseId'          => 'CaseId',
        'caseStatus'      => 'CaseStatus',
        'createTimeEnd'   => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'currentPage'     => 'CurrentPage',
        'instanceId'      => 'InstanceId',
        'pageSize'        => 'PageSize',
        'phoneNum'        => 'PhoneNum',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetAiOutboundTaskExecDetailRequest
     */
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
