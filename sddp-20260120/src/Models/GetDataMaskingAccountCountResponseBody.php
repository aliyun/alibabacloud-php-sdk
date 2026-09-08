<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingAccountCountResponseBody\accountCount;

class GetDataMaskingAccountCountResponseBody extends Model
{
    /**
     * @var accountCount
     */
    public $accountCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountCount' => 'AccountCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountCount) {
            $this->accountCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCount) {
            $res['AccountCount'] = null !== $this->accountCount ? $this->accountCount->toArray($noStream) : $this->accountCount;
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
        if (isset($map['AccountCount'])) {
            $model->accountCount = accountCount::fromMap($map['AccountCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
