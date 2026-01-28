<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class BridgeWebCallRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $businessUnitId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var bool
     */
    public $sandbox;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'businessUnitId' => 'BusinessUnitId',
        'caller' => 'Caller',
        'deviceId' => 'DeviceId',
        'sampleRate' => 'SampleRate',
        'sandbox' => 'Sandbox',
        'tags' => 'Tags',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
