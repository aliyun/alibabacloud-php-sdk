<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedContactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedFcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedMnsParameters;
use AlibabaCloud\Tea\Model;

class PutEventRuleTargetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var failedMnsParameters
     */
    public $failedMnsParameters;

    /**
     * @var failedFcParameters
     */
    public $failedFcParameters;

    /**
     * @var string
     */
    public $failedParameterCount;

    /**
     * @var failedContactParameters
     */
    public $failedContactParameters;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'failedMnsParameters'     => 'FailedMnsParameters',
        'failedFcParameters'      => 'FailedFcParameters',
        'failedParameterCount'    => 'FailedParameterCount',
        'failedContactParameters' => 'FailedContactParameters',
        'code'                    => 'Code',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failedMnsParameters) {
            $res['FailedMnsParameters'] = null !== $this->failedMnsParameters ? $this->failedMnsParameters->toMap() : null;
        }
        if (null !== $this->failedFcParameters) {
            $res['FailedFcParameters'] = null !== $this->failedFcParameters ? $this->failedFcParameters->toMap() : null;
        }
        if (null !== $this->failedParameterCount) {
            $res['FailedParameterCount'] = $this->failedParameterCount;
        }
        if (null !== $this->failedContactParameters) {
            $res['FailedContactParameters'] = null !== $this->failedContactParameters ? $this->failedContactParameters->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailedMnsParameters'])) {
            $model->failedMnsParameters = failedMnsParameters::fromMap($map['FailedMnsParameters']);
        }
        if (isset($map['FailedFcParameters'])) {
            $model->failedFcParameters = failedFcParameters::fromMap($map['FailedFcParameters']);
        }
        if (isset($map['FailedParameterCount'])) {
            $model->failedParameterCount = $map['FailedParameterCount'];
        }
        if (isset($map['FailedContactParameters'])) {
            $model->failedContactParameters = failedContactParameters::fromMap($map['FailedContactParameters']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
