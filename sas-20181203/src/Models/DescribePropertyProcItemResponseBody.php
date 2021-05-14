<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcItemResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcItemResponseBody\propertyItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyProcItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var propertyItems[]
     */
    public $propertyItems;
    protected $_name = [
        'requestId'     => 'RequestId',
        'pageInfo'      => 'PageInfo',
        'propertyItems' => 'PropertyItems',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyProcItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
