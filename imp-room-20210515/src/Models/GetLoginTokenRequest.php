<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models;

use AlibabaCloud\SDK\Improom\V20210515\Models\GetLoginTokenRequest\requestParams;
use AlibabaCloud\Tea\Model;

class GetLoginTokenRequest extends Model
{
    /**
     * @description AppId
     *
     * @var string
     */
    public $appId;

    /**
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
     * @return GetLoginTokenRequest
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
