<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData;

use AlibabaCloud\Tea\Model;

class YAxisList extends Model
{
    /**
     * @description The name of the data type.
     *
     * @example Port
     *
     * @var string
     */
    public $name;

    /**
     * @description The subtype data of the chart.
     *
     * @example CID_SUSPICIOUS_TREND-AL
     *
     * @var string
     */
    public $subType;

    /**
     * @description The type of the data.
     *
     * @example high
     *
     * @var string
     */
    public $type;

    /**
     * @description The values of the y-axis that corresponds to x-axis points.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'subType' => 'SubType',
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
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
     * @return YAxisList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
