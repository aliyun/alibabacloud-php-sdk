<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes\supportItems;
use AlibabaCloud\Tea\Model;

class supportResourceTypes extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var supportItems[]
     */
    public $supportItems;
    protected $_name = [
        'productCode'  => 'ProductCode',
        'resourceType' => 'ResourceType',
        'supportItems' => 'SupportItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->supportItems) {
            $res['SupportItems'] = [];
            if (null !== $this->supportItems && \is_array($this->supportItems)) {
                $n = 0;
                foreach ($this->supportItems as $item) {
                    $res['SupportItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SupportItems'])) {
            if (!empty($map['SupportItems'])) {
                $model->supportItems = [];
                $n                   = 0;
                foreach ($map['SupportItems'] as $item) {
                    $model->supportItems[$n++] = null !== $item ? supportItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
