<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeResponseBody\content;

class AddAttendeeResponseBody extends Model
{
    /**
     * @var content
     */
    public $content;
    /**
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
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->errorCtx)) {
            Model::validateArray($this->errorCtx);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorCtx) {
            if (\is_array($this->errorCtx)) {
                $res['ErrorCtx'] = [];
                foreach ($this->errorCtx as $key1 => $value1) {
                    $res['ErrorCtx'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ErrorCtx'])) {
                $model->errorCtx = [];
                foreach ($map['ErrorCtx'] as $key1 => $value1) {
                    $model->errorCtx[$key1] = $value1;
                }
            }
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
