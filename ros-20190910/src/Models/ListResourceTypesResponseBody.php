<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListResourceTypesResponseBody\resourceTypeSummaries;
use AlibabaCloud\Tea\Model;

class ListResourceTypesResponseBody extends Model
{
    /**
     * @example EA00860C-ECAF-5253-A1F9-8198695A7157
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeSummaries[]
     */
    public $resourceTypeSummaries;

    /**
     * @description The array of resource types.
     *
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'requestId'             => 'RequestId',
        'resourceTypeSummaries' => 'ResourceTypeSummaries',
        'resourceTypes'         => 'ResourceTypes',
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
        if (null !== $this->resourceTypeSummaries) {
            $res['ResourceTypeSummaries'] = [];
            if (null !== $this->resourceTypeSummaries && \is_array($this->resourceTypeSummaries)) {
                $n = 0;
                foreach ($this->resourceTypeSummaries as $item) {
                    $res['ResourceTypeSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypeSummaries'])) {
            if (!empty($map['ResourceTypeSummaries'])) {
                $model->resourceTypeSummaries = [];
                $n                            = 0;
                foreach ($map['ResourceTypeSummaries'] as $item) {
                    $model->resourceTypeSummaries[$n++] = null !== $item ? resourceTypeSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}
