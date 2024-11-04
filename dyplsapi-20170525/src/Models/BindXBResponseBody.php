<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BindXBResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 工作号关系绑定的唯一标识
     *
     * @example 435****456
     *
     * @var string
     */
    public $authId;

    /**
     * @description 返回状态码 0000表示成功 其他表示失败
     *
     * @example 0000
     *
     * @var string
     */
    public $code;

    /**
     * @description 返回信息
     *
     * @example 成功
     *
     * @var string
     */
    public $message;

    /**
     * @description 返回是否成功 true  表示成功 false表示失败
     *
     * @example false
     *
     * @var bool
     */
    public $success;

    /**
     * @description 工作号号码
     *
     * @example 18*******22
     *
     * @var string
     */
    public $telX;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'authId'             => 'AuthId',
        'code'               => 'Code',
        'message'            => 'Message',
        'success'            => 'Success',
        'telX'               => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindXBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
