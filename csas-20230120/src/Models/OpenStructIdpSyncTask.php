<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class OpenStructIdpSyncTask extends Model
{
    /**
     * @var int
     */
    public $departmentFailed;

    /**
     * @var int
     */
    public $departmentTotal;

    /**
     * @var int
     */
    public $endTimeUnix;

    /**
     * @var string
     */
    public $failType;

    /**
     * @var int[]
     */
    public $idpConfigId;

    /**
     * @var int
     */
    public $startTimeUnix;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var int
     */
    public $updateTimeUnix;

    /**
     * @var int
     */
    public $userFailed;

    /**
     * @var int
     */
    public $userTotal;
    protected $_name = [
        'departmentFailed' => 'DepartmentFailed',
        'departmentTotal' => 'DepartmentTotal',
        'endTimeUnix' => 'EndTimeUnix',
        'failType' => 'FailType',
        'idpConfigId' => 'IdpConfigId',
        'startTimeUnix' => 'StartTimeUnix',
        'status' => 'Status',
        'syncTaskId' => 'SyncTaskId',
        'updateTimeUnix' => 'UpdateTimeUnix',
        'userFailed' => 'UserFailed',
        'userTotal' => 'UserTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentFailed) {
            $res['DepartmentFailed'] = $this->departmentFailed;
        }

        if (null !== $this->departmentTotal) {
            $res['DepartmentTotal'] = $this->departmentTotal;
        }

        if (null !== $this->endTimeUnix) {
            $res['EndTimeUnix'] = $this->endTimeUnix;
        }

        if (null !== $this->failType) {
            $res['FailType'] = $this->failType;
        }

        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }

        if (null !== $this->startTimeUnix) {
            $res['StartTimeUnix'] = $this->startTimeUnix;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }

        if (null !== $this->updateTimeUnix) {
            $res['UpdateTimeUnix'] = $this->updateTimeUnix;
        }

        if (null !== $this->userFailed) {
            $res['UserFailed'] = $this->userFailed;
        }

        if (null !== $this->userTotal) {
            $res['UserTotal'] = $this->userTotal;
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
        if (isset($map['DepartmentFailed'])) {
            $model->departmentFailed = $map['DepartmentFailed'];
        }

        if (isset($map['DepartmentTotal'])) {
            $model->departmentTotal = $map['DepartmentTotal'];
        }

        if (isset($map['EndTimeUnix'])) {
            $model->endTimeUnix = $map['EndTimeUnix'];
        }

        if (isset($map['FailType'])) {
            $model->failType = $map['FailType'];
        }

        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }

        if (isset($map['StartTimeUnix'])) {
            $model->startTimeUnix = $map['StartTimeUnix'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }

        if (isset($map['UpdateTimeUnix'])) {
            $model->updateTimeUnix = $map['UpdateTimeUnix'];
        }

        if (isset($map['UserFailed'])) {
            $model->userFailed = $map['UserFailed'];
        }

        if (isset($map['UserTotal'])) {
            $model->userTotal = $map['UserTotal'];
        }

        return $model;
    }
}
