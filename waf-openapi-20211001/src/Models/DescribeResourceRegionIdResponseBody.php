<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceRegionIdResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example F5905D3F-F674-5177-9E48-466DD3B8****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The region IDs.
     *
     * @var string[]
     */
    public $resourceRegionIds;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceRegionIds' => 'ResourceRegionIds',
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
        if (null !== $this->resourceRegionIds) {
            $res['ResourceRegionIds'] = $this->resourceRegionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceRegionIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRegionIds'])) {
            if (!empty($map['ResourceRegionIds'])) {
                $model->resourceRegionIds = $map['ResourceRegionIds'];
            }
        }

        return $model;
    }
}
