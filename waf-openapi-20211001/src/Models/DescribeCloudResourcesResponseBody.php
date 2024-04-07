<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourcesResponseBody\cloudResources;
use AlibabaCloud\Tea\Model;

class DescribeCloudResourcesResponseBody extends Model
{
    /**
     * @description The cloud service resources that are added to WAF.
     *
     * @var cloudResources[]
     */
    public $cloudResources;

    /**
     * @description The request ID.
     *
     * @example C327F81A-CCE2-5B21-817C-F93E29C5****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of cloud service resources returned.
     *
     * @example 121
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudResources' => 'CloudResources',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudResources) {
            $res['CloudResources'] = [];
            if (null !== $this->cloudResources && \is_array($this->cloudResources)) {
                $n = 0;
                foreach ($this->cloudResources as $item) {
                    $res['CloudResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudResources'])) {
            if (!empty($map['CloudResources'])) {
                $model->cloudResources = [];
                $n                     = 0;
                foreach ($map['CloudResources'] as $item) {
                    $model->cloudResources[$n++] = null !== $item ? cloudResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
