<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceShadowResponseBody extends Model
{
    /**
     * @description The error code that is returned if the call fails. For more information about error codes, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message that is returned if the call fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example A56E345A-0978-4993-ACBA-3EF444ED187F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The shadow information that is returned if the call is successful.
     *
     * >  The structure of the shadow information varies based on the status of the device. For more information, see the [Overview](~~53930~~) topic of Device shadows.
     * @example {"method":"update","state":{"desired":{"color":"green"}},"version":1}
     *
     * @var string
     */
    public $shadowMessage;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'errorMessage'  => 'ErrorMessage',
        'requestId'     => 'RequestId',
        'shadowMessage' => 'ShadowMessage',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->shadowMessage) {
            $res['ShadowMessage'] = $this->shadowMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceShadowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShadowMessage'])) {
            $model->shadowMessage = $map['ShadowMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
