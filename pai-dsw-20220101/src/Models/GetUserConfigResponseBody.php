<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserConfigResponseBody\freeTier;
use AlibabaCloud\Tea\Model;

class GetUserConfigResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $accountSufficient;

    /**
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableEciDisk;

    /**
     * @var freeTier
     */
    public $freeTier;

    /**
     * @example true
     *
     * @var bool
     */
    public $freeTierSpecAvailable;

    /**
     * @example null
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example "Access denied"
     *
     * @var string
     */
    public $message;

    /**
     * @example E7D55162-4489-1619-AAF5-3F97D5FCA948
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accountSufficient'     => 'AccountSufficient',
        'code'                  => 'Code',
        'enableEciDisk'         => 'EnableEciDisk',
        'freeTier'              => 'FreeTier',
        'freeTierSpecAvailable' => 'FreeTierSpecAvailable',
        'httpStatusCode'        => 'HttpStatusCode',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSufficient) {
            $res['AccountSufficient'] = $this->accountSufficient;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->enableEciDisk) {
            $res['EnableEciDisk'] = $this->enableEciDisk;
        }
        if (null !== $this->freeTier) {
            $res['FreeTier'] = null !== $this->freeTier ? $this->freeTier->toMap() : null;
        }
        if (null !== $this->freeTierSpecAvailable) {
            $res['FreeTierSpecAvailable'] = $this->freeTierSpecAvailable;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSufficient'])) {
            $model->accountSufficient = $map['AccountSufficient'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnableEciDisk'])) {
            $model->enableEciDisk = $map['EnableEciDisk'];
        }
        if (isset($map['FreeTier'])) {
            $model->freeTier = freeTier::fromMap($map['FreeTier']);
        }
        if (isset($map['FreeTierSpecAvailable'])) {
            $model->freeTierSpecAvailable = $map['FreeTierSpecAvailable'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
