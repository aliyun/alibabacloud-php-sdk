<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccountKmsStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
