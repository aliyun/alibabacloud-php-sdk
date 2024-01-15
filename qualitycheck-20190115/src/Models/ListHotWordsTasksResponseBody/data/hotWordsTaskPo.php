<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo\dialogueParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo\wordsParam;
use AlibabaCloud\Tea\Model;

class hotWordsTaskPo extends Model
{
    /**
     * @var dialogueParam
     */
    public $dialogueParam;

    /**
     * @example 2020-11-30T21:16Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceStatus;

    /**
     * @example 2020-11-30T21:16Z
     *
     * @var string
     */
    public $lastExecutionTime;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $message;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 2020-11-30T21:16Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 221
     *
     * @var int
     */
    public $taskConfigId;

    /**
     * @example 1
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @example 5
     *
     * @var int
     */
    public $timeUnit;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var wordsParam
     */
    public $wordsParam;
    protected $_name = [
        'dialogueParam'     => 'DialogueParam',
        'endTime'           => 'EndTime',
        'instanceStatus'    => 'InstanceStatus',
        'lastExecutionTime' => 'LastExecutionTime',
        'message'           => 'Message',
        'name'              => 'Name',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'taskConfigId'      => 'TaskConfigId',
        'timeInterval'      => 'TimeInterval',
        'timeUnit'          => 'TimeUnit',
        'type'              => 'Type',
        'wordsParam'        => 'WordsParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogueParam) {
            $res['DialogueParam'] = null !== $this->dialogueParam ? $this->dialogueParam->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->lastExecutionTime) {
            $res['LastExecutionTime'] = $this->lastExecutionTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskConfigId) {
            $res['TaskConfigId'] = $this->taskConfigId;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->wordsParam) {
            $res['WordsParam'] = null !== $this->wordsParam ? $this->wordsParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotWordsTaskPo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogueParam'])) {
            $model->dialogueParam = dialogueParam::fromMap($map['DialogueParam']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LastExecutionTime'])) {
            $model->lastExecutionTime = $map['LastExecutionTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskConfigId'])) {
            $model->taskConfigId = $map['TaskConfigId'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WordsParam'])) {
            $model->wordsParam = wordsParam::fromMap($map['WordsParam']);
        }

        return $model;
    }
}
