<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitSyncMediaInfoJobShrinkRequest extends Model
{
    /**
     * @description The input of the job.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $inputShrink;

    /**
     * @description The job name.
     *
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The scheduling parameters. This parameter is optional.
     *
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @description The user data.
     *
     * @example user-data
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'inputShrink' => 'Input',
        'name' => 'Name',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return SubmitSyncMediaInfoJobShrinkRequest
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
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
