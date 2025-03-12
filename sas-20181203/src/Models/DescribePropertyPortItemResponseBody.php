<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortItemResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortItemResponseBody\propertyItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyPortItemResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description An array that consists of the ports returned.
     *
     * @var propertyItems[]
     */
    public $propertyItems;

    /**
     * @description The ID of the request.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'      => 'PageInfo',
        'propertyItems' => 'PropertyItems',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->propertyItems) {
            $res['PropertyItems'] = [];
            if (null !== $this->propertyItems && \is_array($this->propertyItems)) {
                $n = 0;
                foreach ($this->propertyItems as $item) {
                    $res['PropertyItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyPortItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['PropertyItems'])) {
            if (!empty($map['PropertyItems'])) {
                $model->propertyItems = [];
                $n                    = 0;
                foreach ($map['PropertyItems'] as $item) {
                    $model->propertyItems[$n++] = null !== $item ? propertyItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
