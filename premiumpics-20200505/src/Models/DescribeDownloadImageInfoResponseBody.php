<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadImageInfoResponseBody extends Model
{
    /**
     * @example http
     *
     * @var string
     */
    public $authorizationUrl;

    /**
     * @example sae.errorcode.ServiceDisabled.message
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMsg
     *
     * @example Success. Request Success.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example dsw-registry-vpc.cn-shenzhen.cr.aliyuncs.com/cloud-dsw-user/users:u1135620889978899-8589-20220922110432
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 047CE3B4-32EE-5AB9-89C8-BCEC23A5B4F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'authorizationUrl' => 'AuthorizationUrl',
        'errorCode'        => 'ErrorCode',
        'errorMsg'         => 'ErrorMsg',
        'imageUrl'         => 'ImageUrl',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadImageInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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
