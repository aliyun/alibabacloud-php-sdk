<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The input group of the job. An input of a single file indicates a transcoding job. An input of multiple files indicates an audio and video stream merge job.
     *
     * This parameter is required.
     * @example job-name
     *
     * @var string
     */
    public $inputGroupShrink;

    /**
     * @description The job name.
     *
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The output group of the job.
     *
     * This parameter is required.
     * @example user-data
     *
     * @var string
     */
    public $outputGroupShrink;

    /**
     * @description The scheduling information about the job.
     *
     * @example job-name
     *
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @description The custom settings. The value must be in the JSON format and can be up to 512 bytes in length. You can specify a [custom callback URL](https://help.aliyun.com/document_detail/451631.html).
     *
     * @example user-data
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'inputGroupShrink'     => 'InputGroup',
        'name'                 => 'Name',
        'outputGroupShrink'    => 'OutputGroup',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->inputGroupShrink) {
            $res['InputGroup'] = $this->inputGroupShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputGroupShrink) {
            $res['OutputGroup'] = $this->outputGroupShrink;
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
     * @return SubmitTranscodeJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InputGroup'])) {
            $model->inputGroupShrink = $map['InputGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputGroup'])) {
            $model->outputGroupShrink = $map['OutputGroup'];
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
