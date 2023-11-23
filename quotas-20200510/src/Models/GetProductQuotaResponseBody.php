<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota;
use AlibabaCloud\Tea\Model;

class GetProductQuotaResponseBody extends Model
{
    /**
     * @description The details of the quota.
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The ID of the request.
     *
     * @example 8FF8CAF0-29D9-4F11-B6A4-FD2CBCA016D3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quota'     => 'Quota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
