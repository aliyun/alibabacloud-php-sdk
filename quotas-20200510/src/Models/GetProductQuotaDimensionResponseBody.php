<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponseBody\quotaDimension;
use AlibabaCloud\Tea\Model;

class GetProductQuotaDimensionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quotaDimension
     */
    public $quotaDimension;
    protected $_name = [
        'requestId'      => 'RequestId',
        'quotaDimension' => 'QuotaDimension',
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
        if (null !== $this->quotaDimension) {
            $res['QuotaDimension'] = null !== $this->quotaDimension ? $this->quotaDimension->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QuotaDimension'])) {
            $model->quotaDimension = quotaDimension::fromMap($map['QuotaDimension']);
        }

        return $model;
    }
}
