<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class BridgeWebCallRequest extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;

    /**
     * @var string
     */
    public $accessChannelType;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $draftVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'caller' => 'Caller',
        'deviceId' => 'DeviceId',
        'draftVersion' => 'DraftVersion',
        'instanceId' => 'InstanceId',
        'sampleRate' => 'SampleRate',
        'scriptId' => 'ScriptId',
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
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }

        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->draftVersion) {
            $res['DraftVersion'] = $this->draftVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
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
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }

        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DraftVersion'])) {
            $model->draftVersion = $map['DraftVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
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
