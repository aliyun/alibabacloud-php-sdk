<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList;

use AlibabaCloud\Tea\Model;

class lmAttributeModels extends Model
{
    /**
     * @var int
     */
    public $attrId;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $restriction;

    /**
     * @var string[]
     */
    public $scopeList;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'attrId'      => 'AttrId',
        'category'    => 'Category',
        'dataType'    => 'DataType',
        'description' => 'Description',
        'name'        => 'Name',
        'restriction' => 'Restriction',
        'scopeList'   => 'ScopeList',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrId) {
            $res['AttrId'] = $this->attrId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->restriction) {
            $res['Restriction'] = $this->restriction;
        }
        if (null !== $this->scopeList) {
            $res['ScopeList'] = $this->scopeList;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmAttributeModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttrId'])) {
            $model->attrId = $map['AttrId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Restriction'])) {
            $model->restriction = $map['Restriction'];
        }
        if (isset($map['ScopeList'])) {
            if (!empty($map['ScopeList'])) {
                $model->scopeList = $map['ScopeList'];
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
