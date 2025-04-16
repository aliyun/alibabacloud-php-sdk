<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDynamicDisposalProcessesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $disposalAction;

    /**
     * @var string
     */
    public $disposalProcessId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $recoveryType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'devTag' => 'DevTag',
        'disposalAction' => 'DisposalAction',
        'disposalProcessId' => 'DisposalProcessId',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'recoveryType' => 'RecoveryType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->disposalAction) {
            $res['DisposalAction'] = $this->disposalAction;
        }

        if (null !== $this->disposalProcessId) {
            $res['DisposalProcessId'] = $this->disposalProcessId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recoveryType) {
            $res['RecoveryType'] = $this->recoveryType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DisposalAction'])) {
            $model->disposalAction = $map['DisposalAction'];
        }

        if (isset($map['DisposalProcessId'])) {
            $model->disposalProcessId = $map['DisposalProcessId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecoveryType'])) {
            $model->recoveryType = $map['RecoveryType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
