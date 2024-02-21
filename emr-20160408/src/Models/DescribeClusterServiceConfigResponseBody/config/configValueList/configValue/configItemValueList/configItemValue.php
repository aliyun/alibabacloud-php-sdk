<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue\configItemValueList;

use AlibabaCloud\Tea\Model;

class configItemValue extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $isCustom;

    /**
     * @example tez.history.logging.service.class
     *
     * @var string
     */
    public $itemName;

    /**
     * @example org.apache.tez.dag.history.logging.ats.ATSHistoryLoggingService
     *
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueScope;
    protected $_name = [
        'description' => 'Description',
        'isCustom'    => 'IsCustom',
        'itemName'    => 'ItemName',
        'value'       => 'Value',
        'valueScope'  => 'ValueScope',
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
        if (null !== $this->valueScope) {
            $res['ValueScope'] = $this->valueScope;
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
        if (isset($map['ValueScope'])) {
            $model->valueScope = $map['ValueScope'];
        }

        return $model;
    }
}
