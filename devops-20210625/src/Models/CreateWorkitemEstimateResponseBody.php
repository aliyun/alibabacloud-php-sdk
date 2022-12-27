<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody\workitemTimeEstimate;
use AlibabaCloud\Tea\Model;

class CreateWorkitemEstimateResponseBody extends Model
{
    /**
     * @var workitemTimeEstimate
     */
    public $workitemTimeEstimate;

    /**
     * @example Openapi.RequestError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'workitemTimeEstimate' => 'WorkitemTimeEstimate',
        'errorCode'            => 'errorCode',
        'errorMsg'             => 'errorMsg',
        'requestId'            => 'requestId',
        'success'              => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workitemTimeEstimate) {
            $res['WorkitemTimeEstimate'] = null !== $this->workitemTimeEstimate ? $this->workitemTimeEstimate->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemEstimateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkitemTimeEstimate'])) {
            $model->workitemTimeEstimate = workitemTimeEstimate::fromMap($map['WorkitemTimeEstimate']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
