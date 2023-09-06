<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeResponseBody\content;
use AlibabaCloud\Tea\Model;

class RemoveAttendeeResponseBody extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var mixed[]
     */
    public $errorCtx;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description RequestId
     *
     * @example A348BA5D-FFD4-57E4-9450-23A14D72F331
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'content'        => 'Content',
        'errorCode'      => 'ErrorCode',
        'errorCtx'       => 'ErrorCtx',
        'errorMsg'       => 'ErrorMsg',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorCtx) {
            $res['ErrorCtx'] = $this->errorCtx;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return RemoveAttendeeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorCtx'])) {
            $model->errorCtx = $map['ErrorCtx'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
