<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class MakePilotCallRequest extends Model
{
    /**
     * @var string
     */
    public $callVariables;

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
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $verificationCode;
    protected $_name = [
        'callVariables' => 'CallVariables',
        'deviceId' => 'DeviceId',
        'draftVersion' => 'DraftVersion',
        'instanceId' => 'InstanceId',
        'number' => 'Number',
        'scriptId' => 'ScriptId',
        'tags' => 'Tags',
        'verificationCode' => 'VerificationCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
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

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
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
        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
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

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
