<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCasterRtcInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'requestId' => 'RequestId',
        'authToken' => 'AuthToken',
        'casterId'  => 'CasterId',
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
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterRtcInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
