<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorResponseBody\content;

class RecallHonorResponseBody extends Model
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
        'content'        => 'content',
        'errorCode'      => 'errorCode',
        'errorCtx'       => 'errorCtx',
        'errorMsg'       => 'errorMsg',
        'httpStatusCode' => 'httpStatusCode',
        'requestId'      => 'requestId',
        'success'        => 'success',
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
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorCtx) {
            if (\is_array($this->errorCtx)) {
                $res['errorCtx'] = [];
                foreach ($this->errorCtx as $key1 => $value1) {
                    $res['errorCtx'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorCtx'])) {
            if (!empty($map['errorCtx'])) {
                $model->errorCtx = [];
                foreach ($map['errorCtx'] as $key1 => $value1) {
                    $model->errorCtx[$key1] = $value1;
                }
            }
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
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
