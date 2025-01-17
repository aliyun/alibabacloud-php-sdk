<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\scheduleConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig;

class SubmitSnapshotJobRequest extends Model
{
    /**
     * @var input
     */
    public $input;
    /**
     * @var string
     */
    public $name;
    /**
     * @var output
     */
    public $output;
    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;
    /**
     * @var templateConfig
     */
    public $templateConfig;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'input'          => 'Input',
        'name'           => 'Name',
        'output'         => 'Output',
        'scheduleConfig' => 'ScheduleConfig',
        'templateConfig' => 'TemplateConfig',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (null !== $this->templateConfig) {
            $this->templateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toArray($noStream) : $this->templateConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = templateConfig::fromMap($map['TemplateConfig']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
