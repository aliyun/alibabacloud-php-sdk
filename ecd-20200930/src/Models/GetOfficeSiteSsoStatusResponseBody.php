<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeSiteSsoStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $ssoStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'ssoStatus' => 'SsoStatus',
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
        if (null !== $this->ssoStatus) {
            $res['SsoStatus'] = $this->ssoStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeSiteSsoStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SsoStatus'])) {
            $model->ssoStatus = $map['SsoStatus'];
        }

        return $model;
    }
}
