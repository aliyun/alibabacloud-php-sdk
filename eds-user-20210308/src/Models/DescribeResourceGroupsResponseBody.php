<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup;
use AlibabaCloud\Tea\Model;

class DescribeResourceGroupsResponseBody extends Model
{
    /**
     * @example 68BA1DF7-8814-5AED-B844-F8F7F7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroup[]
     */
    public $resourceGroup;

    /**
     * @example 7
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroup' => 'ResourceGroup',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = [];
            if (null !== $this->resourceGroup && \is_array($this->resourceGroup)) {
                $n = 0;
                foreach ($this->resourceGroup as $item) {
                    $res['ResourceGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = [];
                $n = 0;
                foreach ($map['ResourceGroup'] as $item) {
                    $model->resourceGroup[$n++] = null !== $item ? resourceGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
