<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class dimensionGroups extends Model
{
    /**
     * @var string[]
     */
    public $dimensionKeys;

    /**
     * @var string
     */
    public $groupCode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'dimensionKeys' => 'DimensionKeys',
        'groupCode' => 'GroupCode',
        'groupName' => 'GroupName',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        if (\is_array($this->dimensionKeys)) {
            Model::validateArray($this->dimensionKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensionKeys) {
            if (\is_array($this->dimensionKeys)) {
                $res['DimensionKeys'] = [];
                $n1 = 0;
                foreach ($this->dimensionKeys as $item1) {
                    $res['DimensionKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['DimensionKeys'])) {
            if (!empty($map['DimensionKeys'])) {
                $model->dimensionKeys = [];
                $n1 = 0;
                foreach ($map['DimensionKeys'] as $item1) {
                    $model->dimensionKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
