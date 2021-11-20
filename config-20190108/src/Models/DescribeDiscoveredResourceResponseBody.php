<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceResponseBody\discoveredResourceDetail;
use AlibabaCloud\Tea\Model;

class DescribeDiscoveredResourceResponseBody extends Model
{
    /**
     * @var discoveredResourceDetail
     */
    public $discoveredResourceDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceDetail' => 'DiscoveredResourceDetail',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceDetail) {
            $res['DiscoveredResourceDetail'] = null !== $this->discoveredResourceDetail ? $this->discoveredResourceDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiscoveredResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceDetail'])) {
            $model->discoveredResourceDetail = discoveredResourceDetail::fromMap($map['DiscoveredResourceDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
