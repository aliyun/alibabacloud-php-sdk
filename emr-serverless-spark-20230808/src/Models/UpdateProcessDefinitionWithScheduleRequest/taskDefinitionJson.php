<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams;
use AlibabaCloud\Tea\Model;

class taskDefinitionJson extends Model
{
    /**
     * @example foo_bar@spark.alert.invalid.com
     *
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @description This parameter is required.
     *
     * @example 23************
     *
     * @var int
     */
    public $code;

    /**
     * @example ods transform task
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $failAlertEnable;

    /**
     * @example 1
     *
     * @var int
     */
    public $failRetryTimes;

    /**
     * @description This parameter is required.
     *
     * @example ods_transform_task
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $startAlertEnable;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @description This parameter is required.
     *
     * @var taskParams
     */
    public $taskParams;

    /**
     * @description This parameter is required.
     *
     * @example EMR-SERVERLESS-SPARK
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'code'              => 'code',
        'description'       => 'description',
        'failAlertEnable'   => 'failAlertEnable',
        'failRetryTimes'    => 'failRetryTimes',
        'name'              => 'name',
        'startAlertEnable'  => 'startAlertEnable',
        'tags'              => 'tags',
        'taskParams'        => 'taskParams',
        'taskType'          => 'taskType',
        'timeout'           => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEmailAddress) {
            $res['alertEmailAddress'] = $this->alertEmailAddress;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->failAlertEnable) {
            $res['failAlertEnable'] = $this->failAlertEnable;
        }
        if (null !== $this->failRetryTimes) {
            $res['failRetryTimes'] = $this->failRetryTimes;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->startAlertEnable) {
            $res['startAlertEnable'] = $this->startAlertEnable;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->taskParams) {
            $res['taskParams'] = null !== $this->taskParams ? $this->taskParams->toMap() : null;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDefinitionJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertEmailAddress'])) {
            $model->alertEmailAddress = $map['alertEmailAddress'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['failAlertEnable'])) {
            $model->failAlertEnable = $map['failAlertEnable'];
        }
        if (isset($map['failRetryTimes'])) {
            $model->failRetryTimes = $map['failRetryTimes'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['startAlertEnable'])) {
            $model->startAlertEnable = $map['startAlertEnable'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['taskParams'])) {
            $model->taskParams = taskParams::fromMap($map['taskParams']);
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
