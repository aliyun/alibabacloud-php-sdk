<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $dstPath;

    /**
     * @var int
     */
    public $dstType;

    /**
     * @var string
     */
    public $dstTypeCode;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $hasUnfinishProcess;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $originalTable;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $runCount;

    /**
     * @var string
     */
    public $srcPath;

    /**
     * @var int
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcTypeCode;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $triggerType;
    protected $_name = [
        'dstPath'            => 'DstPath',
        'dstType'            => 'DstType',
        'dstTypeCode'        => 'DstTypeCode',
        'gmtCreate'          => 'GmtCreate',
        'hasUnfinishProcess' => 'HasUnfinishProcess',
        'id'                 => 'Id',
        'originalTable'      => 'OriginalTable',
        'owner'              => 'Owner',
        'runCount'           => 'RunCount',
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
