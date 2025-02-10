<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponseBody\supportResourceTypes\supportItems;

class supportResourceTypes extends Model
{
    /**
     * @var string
     */
    public $arnTemplate;
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
        'arnTemplate'  => 'ArnTemplate',
        'productCode'  => 'ProductCode',
        'resourceType' => 'ResourceType',
        'supportItems' => 'SupportItems',
    ];

    public function validate()
    {
        if (\is_array($this->supportItems)) {
            Model::validateArray($this->supportItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arnTemplate) {
            $res['ArnTemplate'] = $this->arnTemplate;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->supportItems) {
            if (\is_array($this->supportItems)) {
                $res['SupportItems'] = [];
                $n1                  = 0;
                foreach ($this->supportItems as $item1) {
                    $res['SupportItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ArnTemplate'])) {
            $model->arnTemplate = $map['ArnTemplate'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SupportItems'])) {
            if (!empty($map['SupportItems'])) {
                $model->supportItems = [];
                $n1                  = 0;
                foreach ($map['SupportItems'] as $item1) {
                    $model->supportItems[$n1++] = supportItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
