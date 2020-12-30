<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackInstancesResponseBody\resourcePacks;
use AlibabaCloud\Tea\Model;

class DescribeResourcePackInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePacks[]
     */
    public $resourcePacks;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'resourcePacks' => 'ResourcePacks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourcePacks) {
            $res['ResourcePacks'] = [];
            if (null !== $this->resourcePacks && \is_array($this->resourcePacks)) {
                $n = 0;
                foreach ($this->resourcePacks as $item) {
                    $res['ResourcePacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePacks'])) {
            if (!empty($map['ResourcePacks'])) {
                $model->resourcePacks = [];
                $n                    = 0;
                foreach ($map['ResourcePacks'] as $item) {
                    $model->resourcePacks[$n++] = null !== $item ? resourcePacks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
