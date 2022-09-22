<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountQuotaAttributesResponseBody\quotaAttributes;
use AlibabaCloud\Tea\Model;

class DescribeAccountQuotaAttributesResponseBody extends Model
{
    /**
     * @var quotaAttributes
     */
    public $quotaAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaAttributes' => 'QuotaAttributes',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaAttributes) {
            $res['QuotaAttributes'] = null !== $this->quotaAttributes ? $this->quotaAttributes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountQuotaAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaAttributes'])) {
            $model->quotaAttributes = quotaAttributes::fromMap($map['QuotaAttributes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
