<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponseBody\quotaDimension;
use AlibabaCloud\Tea\Model;

class GetProductQuotaDimensionResponseBody extends Model
{
    /**
     * @description The details about the quota dimension.
     *
     * @var quotaDimension
     */
    public $quotaDimension;

    /**
     * @description The ID of the request.
     *
     * @example 1FA5F0E2-368E-4BA4-A8D0-6060FC6BB8F3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaDimension' => 'QuotaDimension',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaDimension) {
            $res['QuotaDimension'] = null !== $this->quotaDimension ? $this->quotaDimension->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductQuotaDimensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaDimension'])) {
            $model->quotaDimension = quotaDimension::fromMap($map['QuotaDimension']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
