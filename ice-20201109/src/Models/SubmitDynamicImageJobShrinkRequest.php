<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitDynamicImageJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $inputShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $outputShrink;
    /**
     * @var string
     */
    public $scheduleConfigShrink;
    /**
     * @var string
     */
    public $templateConfigShrink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
