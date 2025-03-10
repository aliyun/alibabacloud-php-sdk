<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponseBody\propertyTypeItems;

class DescribePropertyTypeScaItemResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var propertyTypeItems[]
     */
    public $propertyTypeItems;
    /**
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
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->propertyTypeItems)) {
            Model::validateArray($this->propertyTypeItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->propertyTypeItems) {
            if (\is_array($this->propertyTypeItems)) {
                $res['PropertyTypeItems'] = [];
                $n1                       = 0;
                foreach ($this->propertyTypeItems as $item1) {
                    $res['PropertyTypeItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['PropertyTypeItems'])) {
            if (!empty($map['PropertyTypeItems'])) {
                $model->propertyTypeItems = [];
                $n1                       = 0;
                foreach ($map['PropertyTypeItems'] as $item1) {
                    $model->propertyTypeItems[$n1++] = propertyTypeItems::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
