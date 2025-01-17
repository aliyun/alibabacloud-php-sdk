<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitTranscodeJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $inputGroupShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $outputGroupShrink;
    /**
     * @var string
     */
    public $scheduleConfigShrink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
