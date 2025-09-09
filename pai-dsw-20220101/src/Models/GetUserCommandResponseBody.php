<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserCommandResponseBody\onStart;

class GetUserCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var onStart
     */
    public $onStart;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $userCommandId;

    /**
     * @var mixed[]
     */
    public $accessDeniedDetail;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'onStart' => 'OnStart',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'userCommandId' => 'UserCommandId',
        'accessDeniedDetail' => 'accessDeniedDetail',
    ];

    public function validate()
    {
        if (null !== $this->onStart) {
            $this->onStart->validate();
        }
        if (\is_array($this->accessDeniedDetail)) {
            Model::validateArray($this->accessDeniedDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->onStart) {
            $res['OnStart'] = null !== $this->onStart ? $this->onStart->toArray($noStream) : $this->onStart;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->userCommandId) {
            $res['UserCommandId'] = $this->userCommandId;
        }

        if (null !== $this->accessDeniedDetail) {
            if (\is_array($this->accessDeniedDetail)) {
                $res['accessDeniedDetail'] = [];
                foreach ($this->accessDeniedDetail as $key1 => $value1) {
                    $res['accessDeniedDetail'][$key1] = $value1;
                }
            }
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OnStart'])) {
            $model->onStart = onStart::fromMap($map['OnStart']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['UserCommandId'])) {
            $model->userCommandId = $map['UserCommandId'];
        }

        if (isset($map['accessDeniedDetail'])) {
            if (!empty($map['accessDeniedDetail'])) {
                $model->accessDeniedDetail = [];
                foreach ($map['accessDeniedDetail'] as $key1 => $value1) {
                    $model->accessDeniedDetail[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
