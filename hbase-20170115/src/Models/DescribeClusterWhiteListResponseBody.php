<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListResponseBody\groupItems;

class DescribeClusterWhiteListResponseBody extends Model
{
    /**
     * @var groupItems
     */
    public $groupItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupItems' => 'GroupItems',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->groupItems) {
            $this->groupItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupItems) {
            $res['GroupItems'] = null !== $this->groupItems ? $this->groupItems->toArray($noStream) : $this->groupItems;
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
        if (isset($map['GroupItems'])) {
            $model->groupItems = groupItems::fromMap($map['GroupItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
