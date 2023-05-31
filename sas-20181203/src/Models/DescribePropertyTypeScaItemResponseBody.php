<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponseBody\propertyTypeItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyTypeScaItemResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description An array that consists of the middleware types.
     *
     * @var propertyTypeItems[]
     */
    public $propertyTypeItems;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example B7A839E8-70AE-591D-8D9E-C5419A22****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'          => 'PageInfo',
        'propertyTypeItems' => 'PropertyTypeItems',
        'requestId'         => 'RequestId',
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
        if (null !== $this->propertyTypeItems) {
            $res['PropertyTypeItems'] = [];
            if (null !== $this->propertyTypeItems && \is_array($this->propertyTypeItems)) {
                $n = 0;
                foreach ($this->propertyTypeItems as $item) {
                    $res['PropertyTypeItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePropertyTypeScaItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['PropertyTypeItems'])) {
            if (!empty($map['PropertyTypeItems'])) {
                $model->propertyTypeItems = [];
                $n                        = 0;
                foreach ($map['PropertyTypeItems'] as $item) {
                    $model->propertyTypeItems[$n++] = null !== $item ? propertyTypeItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
