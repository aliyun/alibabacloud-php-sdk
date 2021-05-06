<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalRequest\requestParams;
use AlibabaCloud\Tea\Model;

class UpdateMsgRecallIntervalRequest extends Model
{
    /**
     * @description 请求
     *
     * @var requestParams
     */
    public $requestParams;

    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'requestParams' => 'RequestParams',
        'appId'         => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParams) {
            $res['RequestParams'] = null !== $this->requestParams ? $this->requestParams->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMsgRecallIntervalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParams'])) {
            $model->requestParams = requestParams::fromMap($map['RequestParams']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
