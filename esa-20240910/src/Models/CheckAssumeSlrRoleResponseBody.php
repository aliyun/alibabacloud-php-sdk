<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CheckAssumeSlrRoleResponseBody extends Model
{
    /**
     * @example aliuid:xxx assumeOssRole not exist,serviceName:realtimelogpush.dcdnservices.aliyuncs.com
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example true
     *
     * @var string
     */
    public $isExist;

    /**
     * @description Id of the request
     *
     * @example 34DCBC8A-****-****-****-6DAA11D7DDBD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorMsg' => 'ErrorMsg',
        'isExist' => 'IsExist',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->isExist) {
            $res['IsExist'] = $this->isExist;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAssumeSlrRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['IsExist'])) {
            $model->isExist = $map['IsExist'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
