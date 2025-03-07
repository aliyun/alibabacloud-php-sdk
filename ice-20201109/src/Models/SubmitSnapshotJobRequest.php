<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\scheduleConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig;
use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobRequest extends Model
{
    /**
     * @description The snapshot input.
     *
     * This parameter is required.
     * @var input
     */
    public $input;

    /**
     * @description The name of the job.
     *
     * @example SampleJob
     *
     * @var string
     */
    public $name;

    /**
     * @description The snapshot output.
     *
     * This parameter is required.
     * @var output
     */
    public $output;

    /**
     * @description The scheduling settings.
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description The snapshot template configuration.
     *
     * This parameter is required.
     * @var templateConfig
     */
    public $templateConfig;

    /**
     * @description The user-defined data.
     *
     * @example {"test parameter": "test value"}
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobRequest
     */
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
