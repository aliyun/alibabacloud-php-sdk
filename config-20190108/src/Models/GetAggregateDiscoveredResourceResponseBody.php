<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetAggregateDiscoveredResourceResponseBody\discoveredResourceDetail;
use AlibabaCloud\Tea\Model;

class GetAggregateDiscoveredResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var discoveredResourceDetail
     */
    public $discoveredResourceDetail;
    protected $_name = [
        'requestId'                => 'RequestId',
        'discoveredResourceDetail' => 'DiscoveredResourceDetail',
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
        if (null !== $this->discoveredResourceDetail) {
            $res['DiscoveredResourceDetail'] = null !== $this->discoveredResourceDetail ? $this->discoveredResourceDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateDiscoveredResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscoveredResourceDetail'])) {
            $model->discoveredResourceDetail = discoveredResourceDetail::fromMap($map['DiscoveredResourceDetail']);
        }

        return $model;
    }
}
