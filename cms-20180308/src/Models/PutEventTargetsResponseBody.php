<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\contactParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedContactParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedFcParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedMnsParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedSlsParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\fcParameters;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\mnsParameters;

class PutEventTargetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var contactParameters
     */
    public $contactParameters;

    /**
     * @var failedContactParameters
     */
    public $failedContactParameters;

    /**
     * @var failedFcParameters
     */
    public $failedFcParameters;

    /**
     * @var failedMnsParameters
     */
    public $failedMnsParameters;

    /**
     * @var string
     */
    public $failedParameterCount;

    /**
     * @var failedSlsParameters
     */
    public $failedSlsParameters;

    /**
     * @var fcParameters
     */
    public $fcParameters;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mnsParameters
     */
    public $mnsParameters;

    /**
     * @var string
     */
    public $parameterCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'contactParameters' => 'ContactParameters',
        'failedContactParameters' => 'FailedContactParameters',
        'failedFcParameters' => 'FailedFcParameters',
        'failedMnsParameters' => 'FailedMnsParameters',
        'failedParameterCount' => 'FailedParameterCount',
        'failedSlsParameters' => 'FailedSlsParameters',
        'fcParameters' => 'FcParameters',
        'message' => 'Message',
        'mnsParameters' => 'MnsParameters',
        'parameterCount' => 'ParameterCount',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->contactParameters) {
            $this->contactParameters->validate();
        }
        if (null !== $this->failedContactParameters) {
            $this->failedContactParameters->validate();
        }
        if (null !== $this->failedFcParameters) {
            $this->failedFcParameters->validate();
        }
        if (null !== $this->failedMnsParameters) {
            $this->failedMnsParameters->validate();
        }
        if (null !== $this->failedSlsParameters) {
            $this->failedSlsParameters->validate();
        }
        if (null !== $this->fcParameters) {
            $this->fcParameters->validate();
        }
        if (null !== $this->mnsParameters) {
            $this->mnsParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = null !== $this->contactParameters ? $this->contactParameters->toArray($noStream) : $this->contactParameters;
        }

        if (null !== $this->failedContactParameters) {
            $res['FailedContactParameters'] = null !== $this->failedContactParameters ? $this->failedContactParameters->toArray($noStream) : $this->failedContactParameters;
        }

        if (null !== $this->failedFcParameters) {
            $res['FailedFcParameters'] = null !== $this->failedFcParameters ? $this->failedFcParameters->toArray($noStream) : $this->failedFcParameters;
        }

        if (null !== $this->failedMnsParameters) {
            $res['FailedMnsParameters'] = null !== $this->failedMnsParameters ? $this->failedMnsParameters->toArray($noStream) : $this->failedMnsParameters;
        }

        if (null !== $this->failedParameterCount) {
            $res['FailedParameterCount'] = $this->failedParameterCount;
        }

        if (null !== $this->failedSlsParameters) {
            $res['FailedSlsParameters'] = null !== $this->failedSlsParameters ? $this->failedSlsParameters->toArray($noStream) : $this->failedSlsParameters;
        }

        if (null !== $this->fcParameters) {
            $res['FcParameters'] = null !== $this->fcParameters ? $this->fcParameters->toArray($noStream) : $this->fcParameters;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = null !== $this->mnsParameters ? $this->mnsParameters->toArray($noStream) : $this->mnsParameters;
        }

        if (null !== $this->parameterCount) {
            $res['ParameterCount'] = $this->parameterCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ContactParameters'])) {
            $model->contactParameters = contactParameters::fromMap($map['ContactParameters']);
        }

        if (isset($map['FailedContactParameters'])) {
            $model->failedContactParameters = failedContactParameters::fromMap($map['FailedContactParameters']);
        }

        if (isset($map['FailedFcParameters'])) {
            $model->failedFcParameters = failedFcParameters::fromMap($map['FailedFcParameters']);
        }

        if (isset($map['FailedMnsParameters'])) {
            $model->failedMnsParameters = failedMnsParameters::fromMap($map['FailedMnsParameters']);
        }

        if (isset($map['FailedParameterCount'])) {
            $model->failedParameterCount = $map['FailedParameterCount'];
        }

        if (isset($map['FailedSlsParameters'])) {
            $model->failedSlsParameters = failedSlsParameters::fromMap($map['FailedSlsParameters']);
        }

        if (isset($map['FcParameters'])) {
            $model->fcParameters = fcParameters::fromMap($map['FcParameters']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MnsParameters'])) {
            $model->mnsParameters = mnsParameters::fromMap($map['MnsParameters']);
        }

        if (isset($map['ParameterCount'])) {
            $model->parameterCount = $map['ParameterCount'];
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
