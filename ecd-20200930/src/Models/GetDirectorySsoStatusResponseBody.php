<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetDirectorySsoStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $ssoStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ssoStatus' => 'SsoStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ssoStatus) {
            $res['SsoStatus'] = $this->ssoStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectorySsoStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SsoStatus'])) {
            $model->ssoStatus = $map['SsoStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
