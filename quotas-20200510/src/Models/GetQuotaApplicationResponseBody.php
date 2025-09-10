<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody\quotaApplication;

class GetQuotaApplicationResponseBody extends Model
{
    /**
     * @var quotaApplication
     */
    public $quotaApplication;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaApplication' => 'QuotaApplication',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->quotaApplication) {
            $this->quotaApplication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaApplication) {
            $res['QuotaApplication'] = null !== $this->quotaApplication ? $this->quotaApplication->toArray($noStream) : $this->quotaApplication;
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
        if (isset($map['QuotaApplication'])) {
            $model->quotaApplication = quotaApplication::fromMap($map['QuotaApplication']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
