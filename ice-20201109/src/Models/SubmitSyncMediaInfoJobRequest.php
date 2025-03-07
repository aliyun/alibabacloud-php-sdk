<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitSyncMediaInfoJobRequest extends Model
{
    /**
     * @description The input of the job.
     *
     * This parameter is required.
     * @var input
     */
    public $input;

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
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @description The user data.
     *
     * @example user-data
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'input'          => 'Input',
        'name'           => 'Name',
        'scheduleConfig' => 'ScheduleConfig',
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
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSyncMediaInfoJobRequest
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
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
