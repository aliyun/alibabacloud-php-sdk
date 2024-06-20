<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Tea\Model;

class GetUserResponseBody extends Model
{
    /**
     * @example 20200425******
     *
     * @var string
     */
    public $appId;

    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example ai-service.******.alicontainer.com
     *
     * @var string
     */
    public $host;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 897658D5-1FB8-5CFA-A030-727CCAE59EB0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Njk0Njk******
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'appId'     => 'AppId',
        'code'      => 'Code',
        'host'      => 'Host',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
