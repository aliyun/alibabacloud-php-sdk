<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;
use AlibabaCloud\Tea\Model;

class DescribeAccountAttributesResponseBody extends Model
{
    /**
     * @description Details about account privileges specified by AccountAttributeItem in the specified region.
     *
     * @var accountAttributeItems
     */
    public $accountAttributeItems;

    /**
     * @description The ID of the request.
     *
     * @example 8CE45CD5-31FB-47C2-959D-CA8144CE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountAttributeItems' => 'AccountAttributeItems',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAttributeItems) {
            $res['AccountAttributeItems'] = null !== $this->accountAttributeItems ? $this->accountAttributeItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAttributeItems'])) {
            $model->accountAttributeItems = accountAttributeItems::fromMap($map['AccountAttributeItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
