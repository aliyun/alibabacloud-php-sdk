<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListResponseBody\groupItems;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupItems) {
            $res['GroupItems'] = null !== $this->groupItems ? $this->groupItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterWhiteListResponseBody
     */
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
