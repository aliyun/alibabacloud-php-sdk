<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo\dialogueParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo\wordsParam;
use AlibabaCloud\Tea\Model;

class hotWordsTaskPo extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskConfigId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $lastExecutionTime;

    /**
     * @var int
     */
    public $timeUnit;

    /**
     * @var wordsParam
     */
    public $wordsParam;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $timeInterval;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var dialogueParam
     */
    public $dialogueParam;
    protected $_name = [
        'type'              => 'Type',
        'status'            => 'Status',
        'taskConfigId'      => 'TaskConfigId',
        'message'           => 'Message',
        'lastExecutionTime' => 'LastExecutionTime',
        'timeUnit'          => 'TimeUnit',
        'wordsParam'        => 'WordsParam',
        'endTime'           => 'EndTime',
        'timeInterval'      => 'TimeInterval',
        'startTime'         => 'StartTime',
        'instanceStatus'    => 'InstanceStatus',
        'name'              => 'Name',
        'dialogueParam'     => 'DialogueParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskConfigId) {
            $res['TaskConfigId'] = $this->taskConfigId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->lastExecutionTime) {
            $res['LastExecutionTime'] = $this->lastExecutionTime;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->wordsParam) {
            $res['WordsParam'] = null !== $this->wordsParam ? $this->wordsParam->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->dialogueParam) {
            $res['DialogueParam'] = null !== $this->dialogueParam ? $this->dialogueParam->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskConfigId'])) {
            $model->taskConfigId = $map['TaskConfigId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['LastExecutionTime'])) {
            $model->lastExecutionTime = $map['LastExecutionTime'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['WordsParam'])) {
            $model->wordsParam = wordsParam::fromMap($map['WordsParam']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DialogueParam'])) {
            $model->dialogueParam = dialogueParam::fromMap($map['DialogueParam']);
        }

        return $model;
    }
}
