<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateDiscoveredResourceResponseBody\discoveredResourceDetail;
use AlibabaCloud\Tea\Model;

class GetAggregateDiscoveredResourceResponseBody extends Model
{
    /**
     * @description The ID of the region in which the resource resides.
     *
     * @var discoveredResourceDetail
     */
    public $discoveredResourceDetail;

    /**
     * @description The configuration of the resource.
     *
     * @example E4D71ACE-6B0A-46E0-8352-56952378CC7F
     *
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
     * @return GetAggregateDiscoveredResourceResponseBody
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
