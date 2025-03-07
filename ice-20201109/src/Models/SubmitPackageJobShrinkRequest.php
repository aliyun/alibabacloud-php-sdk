<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitPackageJobShrinkRequest extends Model
{
    /**
     * @description The input of the job.
     *
     * This parameter is required.
     * @var string
     */
    public $inputsShrink;

    /**
     * @description The name of the job.
     *
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The output of the job.
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
     * @description The user-defined data.
     *
     * @example {"param": "value"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'inputsShrink'         => 'Inputs',
        'name'                 => 'Name',
        'outputShrink'         => 'Output',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputsShrink) {
            $res['Inputs'] = $this->inputsShrink;
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitPackageJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inputs'])) {
            $model->inputsShrink = $map['Inputs'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
