<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemEstimateResponseBody\workitemTimeEstimate;
use AlibabaCloud\Tea\Model;

class ListWorkitemEstimateResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

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
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
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
     * @var workitemTimeEstimate[]
     */
    public $workitemTimeEstimate;
    protected $_name = [
        'code'                 => 'code',
        'errorCode'            => 'errorCode',
        'errorMsg'             => 'errorMsg',
        'requestId'            => 'requestId',
        'success'              => 'success',
        'workitemTimeEstimate' => 'workitemTimeEstimate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
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
        if (null !== $this->workitemTimeEstimate) {
            $res['workitemTimeEstimate'] = [];
            if (null !== $this->workitemTimeEstimate && \is_array($this->workitemTimeEstimate)) {
                $n = 0;
                foreach ($this->workitemTimeEstimate as $item) {
                    $res['workitemTimeEstimate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkitemEstimateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
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
        if (isset($map['workitemTimeEstimate'])) {
            if (!empty($map['workitemTimeEstimate'])) {
                $model->workitemTimeEstimate = [];
                $n                           = 0;
                foreach ($map['workitemTimeEstimate'] as $item) {
                    $model->workitemTimeEstimate[$n++] = null !== $item ? workitemTimeEstimate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
