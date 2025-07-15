<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveMessageAppResponseBody extends Model
{
    /**
     * @description The application ID. The ID is used in subsequent operations, such as joining a group.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The AppKey for authentication of this application.
     *
     * @example **********************************
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The application signature. The signature is required when you use the interactive messaging SDK.
     *
     * @example **************************************************************************
     *
     * @var string
     */
    public $appSign;

    /**
     * @description The data center in which the interactive messaging application was created.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The request ID.
     *
     * @example 65EEDBEB-43FE-1E15-976F-3DDD753A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appSign' => 'AppSign',
        'dataCenter' => 'DataCenter',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveMessageAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
