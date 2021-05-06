<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackInstancesResponse\resourcePacks;
use AlibabaCloud\Tea\Model;

class DescribeResourcePackInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var resourcePacks[]
     */
    public $resourcePacks;
    protected $_name = [
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'resourcePacks' => 'ResourcePacks',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('resourcePacks', $this->resourcePacks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
     * @return DescribeResourcePackInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
