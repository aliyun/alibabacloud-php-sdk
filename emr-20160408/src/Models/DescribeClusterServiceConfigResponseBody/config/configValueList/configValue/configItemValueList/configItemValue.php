<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue\configItemValueList;

use AlibabaCloud\Tea\Model;

class configItemValue extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isCustom;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'isCustom'    => 'IsCustom',
        'itemName'    => 'ItemName',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isCustom) {
            $res['IsCustom'] = $this->isCustom;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsCustom'])) {
            $model->isCustom = $map['IsCustom'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
