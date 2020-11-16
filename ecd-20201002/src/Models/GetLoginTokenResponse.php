<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class GetLoginTokenResponse extends Model
{
    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginToken' => 'LoginToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('loginToken', $this->loginToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginTokenResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
