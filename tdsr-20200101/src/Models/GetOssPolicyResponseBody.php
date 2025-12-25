<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyResponseBody\accessDeniedDetail;

class GetOssPolicyResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'accessId' => 'AccessId',
        'callback' => 'Callback',
        'code' => 'Code',
        'dir' => 'Dir',
        'expire' => 'Expire',
        'host' => 'Host',
        'message' => 'Message',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
