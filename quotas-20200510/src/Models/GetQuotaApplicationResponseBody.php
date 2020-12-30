<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody\quotaApplication;
use AlibabaCloud\Tea\Model;

class GetQuotaApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quotaApplication
     */
    public $quotaApplication;
    protected $_name = [
        'requestId'        => 'RequestId',
        'quotaApplication' => 'QuotaApplication',
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
        if (null !== $this->quotaApplication) {
            $res['QuotaApplication'] = null !== $this->quotaApplication ? $this->quotaApplication->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QuotaApplication'])) {
            $model->quotaApplication = quotaApplication::fromMap($map['QuotaApplication']);
        }

        return $model;
    }
}
