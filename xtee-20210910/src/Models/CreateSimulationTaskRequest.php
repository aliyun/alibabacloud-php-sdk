<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateSimulationTaskRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $dataSourceConfig;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $filtersStr;

    /**
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $rulesStr;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $runTask;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'lang'             => 'Lang',
        'dataSourceConfig' => 'dataSourceConfig',
        'dataSourceType'   => 'dataSourceType',
        'endTime'          => 'endTime',
        'eventCode'        => 'eventCode',
        'filtersStr'       => 'filtersStr',
        'regId'            => 'regId',
        'rulesStr'         => 'rulesStr',
        'runTask'          => 'runTask',
        'startTime'        => 'startTime',
        'taskName'         => 'taskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->dataSourceConfig) {
            $res['dataSourceConfig'] = $this->dataSourceConfig;
        }
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->filtersStr) {
            $res['filtersStr'] = $this->filtersStr;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->rulesStr) {
            $res['rulesStr'] = $this->rulesStr;
        }
        if (null !== $this->runTask) {
            $res['runTask'] = $this->runTask;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimulationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['dataSourceConfig'])) {
            $model->dataSourceConfig = $map['dataSourceConfig'];
        }
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['filtersStr'])) {
            $model->filtersStr = $map['filtersStr'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['rulesStr'])) {
            $model->rulesStr = $map['rulesStr'];
        }
        if (isset($map['runTask'])) {
            $model->runTask = $map['runTask'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
