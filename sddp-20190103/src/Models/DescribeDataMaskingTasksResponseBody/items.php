<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $dstMemberAccount;

    /**
     * @description The destination directory.
     *
     * @example ***\/table1
     *
     * @var string
     */
    public $dstPath;

    /**
     * @description The service to which the data to be de-identified belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value 3 indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 5
     *
     * @var int
     */
    public $dstType;

    /**
     * @description The service to which the de-identified data belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $dstTypeCode;

    /**
     * @description The time when the task was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1582992000000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description Indicates whether the de-identification task is running.
     *
     * @example false
     *
     * @var bool
     */
    public $hasUnfinishProcess;

    /**
     * @description The ID of the task.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the source table is de-identified.
     *
     * @example false
     *
     * @var bool
     */
    public $originalTable;

    /**
     * @description The user who created the de-identification task.
     *
     * @example owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of times that the de-identification task is run.
     *
     * @example 1
     *
     * @var int
     */
    public $runCount;

    /**
     * @var int
     */
    public $srcMemberAccount;

    /**
     * @description The source path.
     *
     * @example ***\/table2
     *
     * @var string
     */
    public $srcPath;

    /**
     * @description The code of the service to which the data to be de-identified belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 5
     *
     * @var int
     */
    public $srcType;

    /**
     * @description The service to which the data to be de-identified belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $srcTypeCode;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example mt4HBgtw1B******
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example Task name
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The mode in which the de-identification task is run. Valid values:
     *
     *   **1**: manual
     *   **2**: scheduled
     *   **3**: manual and scheduled
     *
     * @example 1
     *
     * @var int
     */
    public $triggerType;
    protected $_name = [
        'dstMemberAccount'   => 'DstMemberAccount',
        'dstPath'            => 'DstPath',
        'dstType'            => 'DstType',
        'dstTypeCode'        => 'DstTypeCode',
        'gmtCreate'          => 'GmtCreate',
        'hasUnfinishProcess' => 'HasUnfinishProcess',
        'id'                 => 'Id',
        'originalTable'      => 'OriginalTable',
        'owner'              => 'Owner',
        'runCount'           => 'RunCount',
        'srcMemberAccount'   => 'SrcMemberAccount',
        'srcPath'            => 'SrcPath',
        'srcType'            => 'SrcType',
        'srcTypeCode'        => 'SrcTypeCode',
        'status'             => 'Status',
        'taskId'             => 'TaskId',
        'taskName'           => 'TaskName',
        'triggerType'        => 'TriggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstMemberAccount) {
            $res['DstMemberAccount'] = $this->dstMemberAccount;
        }
        if (null !== $this->dstPath) {
            $res['DstPath'] = $this->dstPath;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->dstTypeCode) {
            $res['DstTypeCode'] = $this->dstTypeCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->hasUnfinishProcess) {
            $res['HasUnfinishProcess'] = $this->hasUnfinishProcess;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->originalTable) {
            $res['OriginalTable'] = $this->originalTable;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->runCount) {
            $res['RunCount'] = $this->runCount;
        }
        if (null !== $this->srcMemberAccount) {
            $res['SrcMemberAccount'] = $this->srcMemberAccount;
        }
        if (null !== $this->srcPath) {
            $res['SrcPath'] = $this->srcPath;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcTypeCode) {
            $res['SrcTypeCode'] = $this->srcTypeCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstMemberAccount'])) {
            $model->dstMemberAccount = $map['DstMemberAccount'];
        }
        if (isset($map['DstPath'])) {
            $model->dstPath = $map['DstPath'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['DstTypeCode'])) {
            $model->dstTypeCode = $map['DstTypeCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['HasUnfinishProcess'])) {
            $model->hasUnfinishProcess = $map['HasUnfinishProcess'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OriginalTable'])) {
            $model->originalTable = $map['OriginalTable'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RunCount'])) {
            $model->runCount = $map['RunCount'];
        }
        if (isset($map['SrcMemberAccount'])) {
            $model->srcMemberAccount = $map['SrcMemberAccount'];
        }
        if (isset($map['SrcPath'])) {
            $model->srcPath = $map['SrcPath'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcTypeCode'])) {
            $model->srcTypeCode = $map['SrcTypeCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
