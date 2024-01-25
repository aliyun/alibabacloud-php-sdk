<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateEslDeviceLightResponseBody\lightFailEslInfos;
use AlibabaCloud\Tea\Model;

class UpdateEslDeviceLightResponseBody extends Model
{
    /**
     * @example -1001
     *
     * @var string
     */
    public $code;

    /**
     * @example PlatformResponseError.%s
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @example The specified store %s does not exist.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example MandatoryParameters
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The specified resource type is invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @var lightFailEslInfos[]
     */
    public $lightFailEslInfos;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example E69C8998-1787-4999-8C75-D663FF1173CF
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

    /**
     * @example 1
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'code'              => 'Code',
        'dynamicCode'       => 'DynamicCode',
        'dynamicMessage'    => 'DynamicMessage',
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'failCount'         => 'FailCount',
        'lightFailEslInfos' => 'LightFailEslInfos',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'successCount'      => 'SuccessCount',
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
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->lightFailEslInfos) {
            $res['LightFailEslInfos'] = [];
            if (null !== $this->lightFailEslInfos && \is_array($this->lightFailEslInfos)) {
                $n = 0;
                foreach ($this->lightFailEslInfos as $item) {
                    $res['LightFailEslInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEslDeviceLightResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['LightFailEslInfos'])) {
            if (!empty($map['LightFailEslInfos'])) {
                $model->lightFailEslInfos = [];
                $n                        = 0;
                foreach ($map['LightFailEslInfos'] as $item) {
                    $model->lightFailEslInfos[$n++] = null !== $item ? lightFailEslInfos::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
