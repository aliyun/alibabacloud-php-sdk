<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetAuthorizationResponseBody extends Model
{
    /**
     * @description 授权失败错误代码
     *
     * @var string
     */
    public $authorizationFailedCode;

    /**
     * @description 授权失败错误消息
     *
     * @var string
     */
    public $authorizationFailedMessage;

    /**
     * @description 是否已经给DSW服务账号授权
     *
     * @var bool
     */
    public $authorized;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationFailedCode'    => 'AuthorizationFailedCode',
        'authorizationFailedMessage' => 'AuthorizationFailedMessage',
        'authorized'                 => 'Authorized',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationFailedCode) {
            $res['AuthorizationFailedCode'] = $this->authorizationFailedCode;
        }
        if (null !== $this->authorizationFailedMessage) {
            $res['AuthorizationFailedMessage'] = $this->authorizationFailedMessage;
        }
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationFailedCode'])) {
            $model->authorizationFailedCode = $map['AuthorizationFailedCode'];
        }
        if (isset($map['AuthorizationFailedMessage'])) {
            $model->authorizationFailedMessage = $map['AuthorizationFailedMessage'];
        }
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
