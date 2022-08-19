<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GenerateDeviceCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var int
     */
    public $expiresAt;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $userCode;

    /**
     * @var string
     */
    public $verificationUri;

    /**
     * @var string
     */
    public $verificationUriComplete;
    protected $_name = [
        'deviceCode'              => 'device_code',
        'expiresAt'               => 'expires_at',
        'expiresIn'               => 'expires_in',
        'interval'                => 'interval',
        'userCode'                => 'user_code',
        'verificationUri'         => 'verification_uri',
        'verificationUriComplete' => 'verification_uri_complete',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['device_code'] = $this->deviceCode;
        }
        if (null !== $this->expiresAt) {
            $res['expires_at'] = $this->expiresAt;
        }
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->userCode) {
            $res['user_code'] = $this->userCode;
        }
        if (null !== $this->verificationUri) {
            $res['verification_uri'] = $this->verificationUri;
        }
        if (null !== $this->verificationUriComplete) {
            $res['verification_uri_complete'] = $this->verificationUriComplete;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDeviceCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['device_code'])) {
            $model->deviceCode = $map['device_code'];
        }
        if (isset($map['expires_at'])) {
            $model->expiresAt = $map['expires_at'];
        }
        if (isset($map['expires_in'])) {
            $model->expiresIn = $map['expires_in'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['user_code'])) {
            $model->userCode = $map['user_code'];
        }
        if (isset($map['verification_uri'])) {
            $model->verificationUri = $map['verification_uri'];
        }
        if (isset($map['verification_uri_complete'])) {
            $model->verificationUriComplete = $map['verification_uri_complete'];
        }

        return $model;
    }
}
