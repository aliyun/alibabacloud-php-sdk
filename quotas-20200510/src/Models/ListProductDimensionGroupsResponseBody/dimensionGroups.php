<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class dimensionGroups extends Model
{
    /**
     * @description The keys of the dimension group.
     *
     * @var string[]
     */
    public $dimensionKeys;

    /**
     * @description The code of the dimension group.
     *
     * @example oss_wf1ngqmd7q
     *
     * @var string
     */
    public $groupCode;

    /**
     * @description The name of the dimension group.
     *
     * @example OSS_Group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The service code.
     *
     * @example oss
     *
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
