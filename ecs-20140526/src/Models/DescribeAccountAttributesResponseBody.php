<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;
use AlibabaCloud\Tea\Model;

class DescribeAccountAttributesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountAttributeItems[]
     */
    public $accountAttributeItems;
    protected $_name = [
        'requestId'             => 'RequestId',
        'accountAttributeItems' => 'AccountAttributeItems',
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
        if (null !== $this->accountAttributeItems) {
            $res['AccountAttributeItems'] = [];
            if (null !== $this->accountAttributeItems && \is_array($this->accountAttributeItems)) {
                $n = 0;
                foreach ($this->accountAttributeItems as $item) {
                    $res['AccountAttributeItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountAttributeItems'])) {
            if (!empty($map['AccountAttributeItems'])) {
                $model->accountAttributeItems = [];
                $n                            = 0;
                foreach ($map['AccountAttributeItems'] as $item) {
                    $model->accountAttributeItems[$n++] = null !== $item ? accountAttributeItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
