<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList\typeData;

use AlibabaCloud\Tea\Model;

class date extends Model
{
    /**
     * @example second
     *
     * @var string
     */
    public $unit;

    /**
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'unit' => 'Unit',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return date
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
