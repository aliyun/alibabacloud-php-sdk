<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams;

class taskDefinitionJson extends Model
{
    /**
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $failAlertEnable;

    /**
     * @var int
     */
    public $failRetryTimes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $startAlertEnable;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var taskParams
     */
    public $taskParams;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'code' => 'code',
        'description' => 'description',
        'failAlertEnable' => 'failAlertEnable',
        'failRetryTimes' => 'failRetryTimes',
        'name' => 'name',
        'startAlertEnable' => 'startAlertEnable',
        'tags' => 'tags',
        'taskParams' => 'taskParams',
        'taskType' => 'taskType',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->taskParams) {
            $this->taskParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->taskParams) {
            $res['taskParams'] = null !== $this->taskParams ? $this->taskParams->toArray($noStream) : $this->taskParams;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
