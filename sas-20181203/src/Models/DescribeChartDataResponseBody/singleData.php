<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\Tea\Model;

class singleData extends Model
{
    /**
     * @description The name of the data type.
     *
     * @example suspicious
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the data.
     *
     * @example suspicious
     *
     * @var string
     */
    public $type;

    /**
     * @description The value in the single value chart.
     *
     * @example 172
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return singleData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
