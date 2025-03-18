<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GenerateDeviceCodeResponseBody extends Model
{
    /**
     * @description The device code.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $deviceCode;

    /**
     * @description The time when the token expires. This value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1653288641
     *
     * @var int
     */
    public $expiresAt;

    /**
     * @description The remaining validity period of the device code. Unit: seconds.
     *
     * @example 1200
     *
     * @var int
     */
    public $expiresIn;

    /**
     * @description The timeout period of the request token. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @description The user authorization code.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $userCode;

    /**
     * @description The verification URI.
     *
     * @example https://example.com/authorize/device
     *
     * @var string
     */
    public $verificationUri;

    /**
     * @description The complete verification URI.
     *
     * @example https://example.com/authorize/device?user_code=
     * xxxx
     *
     * @var string
     */
    public $verificationUriComplete;
    protected $_name = [
        'deviceCode' => 'device_code',
        'expiresAt' => 'expires_at',
        'expiresIn' => 'expires_in',
        'interval' => 'interval',
        'userCode' => 'user_code',
        'verificationUri' => 'verification_uri',
        'verificationUriComplete' => 'verification_uri_complete',
    ];

    public function validate() {}

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
