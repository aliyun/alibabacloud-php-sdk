<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;

class DescribeAccountAttributesResponseBody extends Model
{
    /**
     * @var accountAttributeItems
     */
    public $accountAttributeItems;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountAttributeItems' => 'AccountAttributeItems',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountAttributeItems) {
            $this->accountAttributeItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAttributeItems) {
            $res['AccountAttributeItems'] = null !== $this->accountAttributeItems ? $this->accountAttributeItems->toArray($noStream) : $this->accountAttributeItems;
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
        if (isset($map['AccountAttributeItems'])) {
            $model->accountAttributeItems = accountAttributeItems::fromMap($map['AccountAttributeItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
