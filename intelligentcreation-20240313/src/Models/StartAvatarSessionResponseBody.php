<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class StartAvatarSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $channelToken;

    /**
     * @example 0E8B1746-AE35-5C4B-A3A8-345B274AE32C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 121dlsga4o7golrl1hoja
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'channelToken' => 'channelToken',
        'requestId'    => 'requestId',
        'sessionId'    => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelToken) {
            $res['channelToken'] = $this->channelToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAvatarSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channelToken'])) {
            $model->channelToken = $map['channelToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
