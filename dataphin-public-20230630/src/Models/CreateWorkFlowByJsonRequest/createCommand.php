<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateWorkFlowByJsonRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $scheduleConfig;

    /**
     * @var bool
     */
    public $submit;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $workFlowJson;
    protected $_name = [
        'description' => 'Description',
        'directory' => 'Directory',
        'scheduleConfig' => 'ScheduleConfig',
        'submit' => 'Submit',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'workFlowJson' => 'WorkFlowJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = $this->scheduleConfig;
        }

        if (null !== $this->submit) {
            $res['Submit'] = $this->submit;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->workFlowJson) {
            $res['WorkFlowJson'] = $this->workFlowJson;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = $map['ScheduleConfig'];
        }

        if (isset($map['Submit'])) {
            $model->submit = $map['Submit'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['WorkFlowJson'])) {
            $model->workFlowJson = $map['WorkFlowJson'];
        }

        return $model;
    }
}
