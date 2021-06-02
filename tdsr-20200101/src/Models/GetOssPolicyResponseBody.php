<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetOssPolicyResponseBody extends Model
{
    /**
     * @description 请求ID，与入参requestId对应
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description accessId
     *
     * @var string
     */
    public $accessId;

    /**
     * @description 授权
     *
     * @var string
     */
    public $policy;

    /**
     * @description 签名
     *
     * @var string
     */
    public $signature;

    /**
     * @description 授权路径
     *
     * @var string
     */
    public $dir;

    /**
     * @description 上传地址
     *
     * @var string
     */
    public $host;

    /**
     * @description 授权失效时间(s)
     *
     * @var string
     */
    public $expire;

    /**
     * @description 上传回调
     *
     * @var string
     */
    public $callback;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'success'   => 'Success',
        'message'   => 'Message',
        'accessId'  => 'AccessId',
        'policy'    => 'Policy',
        'signature' => 'Signature',
        'dir'       => 'Dir',
        'host'      => 'Host',
        'expire'    => 'Expire',
        'callback'  => 'Callback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        return $model;
    }
}
