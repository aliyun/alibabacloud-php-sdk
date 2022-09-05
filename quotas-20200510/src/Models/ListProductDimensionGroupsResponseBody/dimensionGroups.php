<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsResponseBody;

use AlibabaCloud\Tea\Model;

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
        'groupCode'     => 'GroupCode',
        'groupName'     => 'GroupName',
        'productCode'   => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensionKeys) {
            $res['DimensionKeys'] = $this->dimensionKeys;
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

    /**
     * @param array $map
     *
     * @return dimensionGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DimensionKeys'])) {
            if (!empty($map['DimensionKeys'])) {
                $model->dimensionKeys = $map['DimensionKeys'];
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
