<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListRegionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @example ["cn-hangzhou", "cn-shengzhen"]
     *
     * @var string[]
     */
    public $data;

    /**
     * @example SysomOpenAPIAssumeRoleException: EntityNotExist.Role The role not exists: acs:ram::xxxxx:role/aliyunserviceroleforsysom
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'requestId' => 'RequestId',
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
