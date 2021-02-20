<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeConferenceAuthInfoResponseBody\authInfo;
use AlibabaCloud\Tea\Model;

class DescribeConferenceAuthInfoResponseBody extends Model
{
    /**
     * @var authInfo
     */
    public $authInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'authInfo'     => 'AuthInfo',
        'requestId'    => 'RequestId',
        'conferenceId' => 'ConferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = null !== $this->authInfo ? $this->authInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConferenceAuthInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthInfo'])) {
            $model->authInfo = authInfo::fromMap($map['AuthInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }

        return $model;
    }
}
