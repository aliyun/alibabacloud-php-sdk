<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobShrinkRequest extends Model
{
    /**
     * @description The snapshot input.
     *
     * This parameter is required.
     * @var string
     */
    public $inputShrink;

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
     * @var string
     */
    public $outputShrink;

    /**
     * @description The scheduling settings.
     *
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @description The snapshot template configuration.
     *
     * This parameter is required.
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @description The user-defined data.
     *
     * @example {"test parameter": "test value"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'inputShrink'          => 'Input',
        'name'                 => 'Name',
        'outputShrink'         => 'Output',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'templateConfigShrink' => 'TemplateConfig',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputShrink) {
            $res['Output'] = $this->outputShrink;
        }
        if (null !== $this->scheduleConfigShrink) {
            $res['ScheduleConfig'] = $this->scheduleConfigShrink;
        }
        if (null !== $this->templateConfigShrink) {
            $res['TemplateConfig'] = $this->templateConfigShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Output'])) {
            $model->outputShrink = $map['Output'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfigShrink = $map['TemplateConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
