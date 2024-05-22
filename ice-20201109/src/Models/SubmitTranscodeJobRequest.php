<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var inputGroup[]
     */
    public $inputGroup;

    /**
     * @example job-name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var outputGroup[]
     */
    public $outputGroup;

    /**
     * @example job-name
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @example user-data
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'inputGroup'     => 'InputGroup',
        'name'           => 'Name',
        'outputGroup'    => 'OutputGroup',
        'scheduleConfig' => 'ScheduleConfig',
        'userData'       => 'UserData',
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
        if (null !== $this->inputGroup) {
            $res['InputGroup'] = [];
            if (null !== $this->inputGroup && \is_array($this->inputGroup)) {
                $n = 0;
                foreach ($this->inputGroup as $item) {
                    $res['InputGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputGroup) {
            $res['OutputGroup'] = [];
            if (null !== $this->outputGroup && \is_array($this->outputGroup)) {
                $n = 0;
                foreach ($this->outputGroup as $item) {
                    $res['OutputGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return SubmitTranscodeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InputGroup'])) {
            if (!empty($map['InputGroup'])) {
                $model->inputGroup = [];
                $n                 = 0;
                foreach ($map['InputGroup'] as $item) {
                    $model->inputGroup[$n++] = null !== $item ? inputGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputGroup'])) {
            if (!empty($map['OutputGroup'])) {
                $model->outputGroup = [];
                $n                  = 0;
                foreach ($map['OutputGroup'] as $item) {
                    $model->outputGroup[$n++] = null !== $item ? outputGroup::fromMap($item) : $item;
                }
            }
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
