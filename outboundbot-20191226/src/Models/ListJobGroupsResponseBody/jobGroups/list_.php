<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponseBody\jobGroups;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponseBody\jobGroups\list_\exportProgress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponseBody\jobGroups\list_\progress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsResponseBody\jobGroups\list_\strategy;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1578550074361
     *
     * @var int
     */
    public $creationTime;

    /**
     * @example {}
     *
     * @var exportProgress
     */
    public $exportProgress;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
     *
     * @var string
     */
    public $jobDataParsingTaskId;

    /**
     * @var string
     */
    public $jobGroupDescription;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @example 1578550074361
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example {}
     *
     * @var progress
     */
    public $progress;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example 1
     *
     * @var string
     */
    public $scriptVersion;

    /**
     * @example Draft
     *
     * @var string
     */
    public $status;

    /**
     * @example {}
     *
     * @var strategy
     */
    public $strategy;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCallNum;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'exportProgress'       => 'ExportProgress',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
        'jobGroupDescription'  => 'JobGroupDescription',
        'jobGroupId'           => 'JobGroupId',
        'jobGroupName'         => 'JobGroupName',
        'modifyTime'           => 'ModifyTime',
        'progress'             => 'Progress',
        'scriptId'             => 'ScriptId',
        'scriptName'           => 'ScriptName',
        'scriptVersion'        => 'ScriptVersion',
        'status'               => 'Status',
        'strategy'             => 'Strategy',
        'totalCallNum'         => 'TotalCallNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->exportProgress) {
            $res['ExportProgress'] = null !== $this->exportProgress ? $this->exportProgress->toMap() : null;
        }
        if (null !== $this->jobDataParsingTaskId) {
            $res['JobDataParsingTaskId'] = $this->jobDataParsingTaskId;
        }
        if (null !== $this->jobGroupDescription) {
            $res['JobGroupDescription'] = $this->jobGroupDescription;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = null !== $this->progress ? $this->progress->toMap() : null;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptVersion) {
            $res['ScriptVersion'] = $this->scriptVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }
        if (null !== $this->totalCallNum) {
            $res['TotalCallNum'] = $this->totalCallNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExportProgress'])) {
            $model->exportProgress = exportProgress::fromMap($map['ExportProgress']);
        }
        if (isset($map['JobDataParsingTaskId'])) {
            $model->jobDataParsingTaskId = $map['JobDataParsingTaskId'];
        }
        if (isset($map['JobGroupDescription'])) {
            $model->jobGroupDescription = $map['JobGroupDescription'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = progress::fromMap($map['Progress']);
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptVersion'])) {
            $model->scriptVersion = $map['ScriptVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }
        if (isset($map['TotalCallNum'])) {
            $model->totalCallNum = $map['TotalCallNum'];
        }

        return $model;
    }
}
