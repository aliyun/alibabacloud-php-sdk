<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateAppNameRequest\requestParams;
use AlibabaCloud\Tea\Model;

class UpdateAppNameRequest extends Model
{
    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;

    /**
     * @description 请求
     *
     * @var requestParams
     */
    public $requestParams;
    protected $_name = [
        'appId'         => 'AppId',
        'requestParams' => 'RequestParams',
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
        if (null !== $this->requestParams) {
            $res['RequestParams'] = null !== $this->requestParams ? $this->requestParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RequestParams'])) {
            $model->requestParams = requestParams::fromMap($map['RequestParams']);
        }

        return $model;
    }
}
