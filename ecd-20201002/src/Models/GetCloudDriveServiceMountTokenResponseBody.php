<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\SDK\Ecd\V20201002\Models\GetCloudDriveServiceMountTokenResponseBody\token;
use AlibabaCloud\Tea\Model;

class GetCloudDriveServiceMountTokenResponseBody extends Model
{
    /**
     * @example DC27288A-F9E1-5092-9B5B-71C27D15****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'requestId' => 'RequestId',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudDriveServiceMountTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }

        return $model;
    }
}
