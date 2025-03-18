<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeUserResourcesResponseBody extends Model
{
    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $queryFailedResourceTypes;

    /**
     * @example 1732869815062
     *
     * @var int
     */
    public $rankVersion;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'queryFailedResourceTypes' => 'QueryFailedResourceTypes',
        'rankVersion' => 'RankVersion',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->queryFailedResourceTypes) {
            $res['QueryFailedResourceTypes'] = $this->queryFailedResourceTypes;
        }
        if (null !== $this->rankVersion) {
            $res['RankVersion'] = $this->rankVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QueryFailedResourceTypes'])) {
            if (!empty($map['QueryFailedResourceTypes'])) {
                $model->queryFailedResourceTypes = $map['QueryFailedResourceTypes'];
            }
        }
        if (isset($map['RankVersion'])) {
            $model->rankVersion = $map['RankVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
