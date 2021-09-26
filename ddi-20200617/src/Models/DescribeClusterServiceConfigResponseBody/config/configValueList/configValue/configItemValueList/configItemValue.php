<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue\configItemValueList;

use AlibabaCloud\Tea\Model;

class configItemValue extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var bool
     */
    public $isCustom;
    protected $_name = [
        'value'       => 'Value',
        'description' => 'Description',
        'itemName'    => 'ItemName',
        'isCustom'    => 'IsCustom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->isCustom) {
            $res['IsCustom'] = $this->isCustom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configItemValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['IsCustom'])) {
            $model->isCustom = $map['IsCustom'];
        }

        return $model;
    }
}
