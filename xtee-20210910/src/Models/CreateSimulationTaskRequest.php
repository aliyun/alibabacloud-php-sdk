<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $endTime;

    /**
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
     * @var string
     */
    public $rulesStr;

    /**
     * @var bool
     */
    public $runTask;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'lang' => 'Lang',
        'dataSourceConfig' => 'dataSourceConfig',
        'dataSourceType' => 'dataSourceType',
        'endTime' => 'endTime',
        'eventCode' => 'eventCode',
        'filtersStr' => 'filtersStr',
        'regId' => 'regId',
        'rulesStr' => 'rulesStr',
        'runTask' => 'runTask',
        'startTime' => 'startTime',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
