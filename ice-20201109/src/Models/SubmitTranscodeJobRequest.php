<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\inputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\scheduleConfig;

class SubmitTranscodeJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var inputGroup[]
     */
    public $inputGroup;
    /**
     * @var string
     */
    public $name;
    /**
     * @var outputGroup[]
     */
    public $outputGroup;
    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;
    /**
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
        if (\is_array($this->inputGroup)) {
            Model::validateArray($this->inputGroup);
        }
        if (\is_array($this->outputGroup)) {
            Model::validateArray($this->outputGroup);
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->inputGroup) {
            if (\is_array($this->inputGroup)) {
                $res['InputGroup'] = [];
                $n1                = 0;
                foreach ($this->inputGroup as $item1) {
                    $res['InputGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputGroup) {
            if (\is_array($this->outputGroup)) {
                $res['OutputGroup'] = [];
                $n1                 = 0;
                foreach ($this->outputGroup as $item1) {
                    $res['OutputGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InputGroup'])) {
            if (!empty($map['InputGroup'])) {
                $model->inputGroup = [];
                $n1                = 0;
                foreach ($map['InputGroup'] as $item1) {
                    $model->inputGroup[$n1++] = inputGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputGroup'])) {
            if (!empty($map['OutputGroup'])) {
                $model->outputGroup = [];
                $n1                 = 0;
                foreach ($map['OutputGroup'] as $item1) {
                    $model->outputGroup[$n1++] = outputGroup::fromMap($item1);
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
