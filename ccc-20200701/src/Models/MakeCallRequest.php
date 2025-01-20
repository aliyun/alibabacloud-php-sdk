<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class MakeCallRequest extends Model
{
    /**
     * @var string
     */
    public $callee;
    /**
     * @var string
     */
    public $caller;
    /**
     * @var string
     */
    public $deviceId;
    /**
     * @var string
     */
    public $flashSmsVariables;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $maskedCallee;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var string
     */
    public $tags;
    /**
     * @var int
     */
    public $timeoutSeconds;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callee'            => 'Callee',
        'caller'            => 'Caller',
        'deviceId'          => 'DeviceId',
        'flashSmsVariables' => 'FlashSmsVariables',
        'instanceId'        => 'InstanceId',
        'maskedCallee'      => 'MaskedCallee',
        'mediaType'         => 'MediaType',
        'tags'              => 'Tags',
        'timeoutSeconds'    => 'TimeoutSeconds',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }

        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->flashSmsVariables) {
            $res['FlashSmsVariables'] = $this->flashSmsVariables;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maskedCallee) {
            $res['MaskedCallee'] = $this->maskedCallee;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }

        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['FlashSmsVariables'])) {
            $model->flashSmsVariables = $map['FlashSmsVariables'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaskedCallee'])) {
            $model->maskedCallee = $map['MaskedCallee'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
