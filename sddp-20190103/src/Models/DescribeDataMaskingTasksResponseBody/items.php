<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $srcType;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var bool
     */
    public $hasUnfinishProcess;

    /**
     * @var bool
     */
    public $originalTable;

    /**
     * @var int
     */
    public $triggerType;

    /**
     * @var string
     */
    public $dstTypeCode;

    /**
     * @var int
     */
    public $runCount;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $dstPath;

    /**
     * @var string
     */
    public $srcTypeCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $srcPath;
    protected $_name = [
        'status'             => 'Status',
        'owner'              => 'Owner',
        'taskName'           => 'TaskName',
        'srcType'            => 'SrcType',
        'dstType'            => 'DstType',
        'hasUnfinishProcess' => 'HasUnfinishProcess',
        'originalTable'      => 'OriginalTable',
        'triggerType'        => 'TriggerType',
        'dstTypeCode'        => 'DstTypeCode',
        'runCount'           => 'RunCount',
        'gmtCreate'          => 'GmtCreate',
        'taskId'             => 'TaskId',
        'dstPath'            => 'DstPath',
        'srcTypeCode'        => 'SrcTypeCode',
        'id'                 => 'Id',
        'srcPath'            => 'SrcPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->hasUnfinishProcess) {
            $res['HasUnfinishProcess'] = $this->hasUnfinishProcess;
        }
        if (null !== $this->originalTable) {
            $res['OriginalTable'] = $this->originalTable;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->dstTypeCode) {
            $res['DstTypeCode'] = $this->dstTypeCode;
        }
        if (null !== $this->runCount) {
            $res['RunCount'] = $this->runCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->dstPath) {
            $res['DstPath'] = $this->dstPath;
        }
        if (null !== $this->srcTypeCode) {
            $res['SrcTypeCode'] = $this->srcTypeCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->srcPath) {
            $res['SrcPath'] = $this->srcPath;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['HasUnfinishProcess'])) {
            $model->hasUnfinishProcess = $map['HasUnfinishProcess'];
        }
        if (isset($map['OriginalTable'])) {
            $model->originalTable = $map['OriginalTable'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['DstTypeCode'])) {
            $model->dstTypeCode = $map['DstTypeCode'];
        }
        if (isset($map['RunCount'])) {
            $model->runCount = $map['RunCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DstPath'])) {
            $model->dstPath = $map['DstPath'];
        }
        if (isset($map['SrcTypeCode'])) {
            $model->srcTypeCode = $map['SrcTypeCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SrcPath'])) {
            $model->srcPath = $map['SrcPath'];
        }

        return $model;
    }
}
