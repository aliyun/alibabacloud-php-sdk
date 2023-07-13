<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponseBody\failIds;
use AlibabaCloud\Tea\Model;

class DeleteMetricRuleTargetsResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the message resource that failed to be deleted.
     *
     * @var failIds
     */
    public $failIds;

    /**
     * @description The ID of the request.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example 786E92D2-AC66-4250-B76F-F1E2FCDDBA1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The message resources that failed to be deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'failIds'   => 'FailIds',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->failIds) {
            $res['FailIds'] = null !== $this->failIds ? $this->failIds->toMap() : null;
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
     * @return DeleteMetricRuleTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailIds'])) {
            $model->failIds = failIds::fromMap($map['FailIds']);
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
