<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ApplyBoardTokenResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $expired;
    protected $_name = [
        'requestId' => 'RequestId',
        'token'     => 'Token',
        'expired'   => 'Expired',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('expired', $this->expired, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyBoardTokenResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        return $model;
    }
}
