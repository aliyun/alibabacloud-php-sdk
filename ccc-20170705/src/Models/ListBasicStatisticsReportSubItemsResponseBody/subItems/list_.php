<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListBasicStatisticsReportSubItemsResponseBody\subItems;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListBasicStatisticsReportSubItemsResponseBody\subItems\list_\row;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $basicStatisticsReportSubItemName;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var int
     */
    public $count;

    /**
     * @var row[]
     */
    public $row;
    protected $_name = [
        'basicStatisticsReportSubItemName' => 'BasicStatisticsReportSubItemName',
        'value'                            => 'Value',
        'percentage'                       => 'Percentage',
        'count'                            => 'Count',
        'row'                              => 'Row',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicStatisticsReportSubItemName) {
            $res['BasicStatisticsReportSubItemName'] = $this->basicStatisticsReportSubItemName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->row) {
            $res['Row'] = [];
            if (null !== $this->row && \is_array($this->row)) {
                $n = 0;
                foreach ($this->row as $item) {
                    $res['Row'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicStatisticsReportSubItemName'])) {
            $model->basicStatisticsReportSubItemName = $map['BasicStatisticsReportSubItemName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Row'])) {
            if (!empty($map['Row'])) {
                $model->row = [];
                $n          = 0;
                foreach ($map['Row'] as $item) {
                    $model->row[$n++] = null !== $item ? row::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
