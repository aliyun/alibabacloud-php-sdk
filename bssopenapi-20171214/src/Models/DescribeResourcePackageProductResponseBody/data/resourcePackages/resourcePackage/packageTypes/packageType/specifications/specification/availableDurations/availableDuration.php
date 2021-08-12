<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;

use AlibabaCloud\Tea\Model;

class availableDuration extends Model
{
    /**
     * @var int
     */
    public $value;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'value' => 'Value',
        'name'  => 'Name',
        'unit'  => 'Unit',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
