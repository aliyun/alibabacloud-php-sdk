<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class GetMFAAuthenticationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $MFAAuthenticationStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFAAuthenticationStatus' => 'MFAAuthenticationStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MFAAuthenticationStatus) {
            $res['MFAAuthenticationStatus'] = $this->MFAAuthenticationStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFAAuthenticationStatus'])) {
            $model->MFAAuthenticationStatus = $map['MFAAuthenticationStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
