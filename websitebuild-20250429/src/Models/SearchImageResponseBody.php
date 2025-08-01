<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponseBody\imageResponse;
use AlibabaCloud\Tea\Model;

class SearchImageResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example aliuid:1998006665794443 assumeRole not exist,serviceName:realtimelogpush.dcdnservices.aliyuncs.com
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @var imageResponse
     */
    public $imageResponse;

    /**
     * @description Id of the request
     *
     * @example 6C6B99AC-39EC-5350-874C-204128C905E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'imageResponse' => 'ImageResponse',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->imageResponse) {
            $res['ImageResponse'] = null !== $this->imageResponse ? $this->imageResponse->toMap() : null;
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
     * @return SearchImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ImageResponse'])) {
            $model->imageResponse = imageResponse::fromMap($map['ImageResponse']);
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
