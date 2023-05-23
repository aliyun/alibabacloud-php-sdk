<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\CreateCampaignResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateCampaignResponseBody extends Model
{
    /**
     * @description 返回数据。
     *
     * @var data
     */
    public $data;

    /**
     * @description 错误码。
     *
     * @example 0
     *
     * @var int
     */
    public $errorCode;

    /**
     * @description 错误信息。
     *
     * @example OK
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 请求ID。
     *
     * @example f8651828-609d-4de8-ab49-ab781d7fd85a
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'         => 'Data',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCampaignResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
