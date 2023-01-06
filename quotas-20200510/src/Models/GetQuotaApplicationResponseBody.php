<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponseBody\quotaApplication;
use AlibabaCloud\Tea\Model;

class GetQuotaApplicationResponseBody extends Model
{
    /**
     * @description The details about the application.
     *
     * @var quotaApplication
     */
    public $quotaApplication;

    /**
     * @description The ID of the request.
     *
     * @example 7BBD1D37-094C-4485-8B7D-64682F82BC18
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaApplication' => 'QuotaApplication',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaApplication) {
            $res['QuotaApplication'] = null !== $this->quotaApplication ? $this->quotaApplication->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QuotaApplication'])) {
            $model->quotaApplication = quotaApplication::fromMap($map['QuotaApplication']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
