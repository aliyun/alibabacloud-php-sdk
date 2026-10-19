<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class TerminateInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $stateVersion;

    /**
     * @var bool
     */
    public $terminated;
    protected $_name = [
        'code' => 'code',
        'instanceId' => 'instanceId',
        'instanceStatus' => 'instanceStatus',
        'message' => 'message',
        'requestId' => 'requestId',
        'stateVersion' => 'stateVersion',
        'terminated' => 'terminated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
        }

        if (null !== $this->terminated) {
            $res['terminated'] = $this->terminated;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        if (isset($map['terminated'])) {
            $model->terminated = $map['terminated'];
        }

        return $model;
    }
}
