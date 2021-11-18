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
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var row[]
     */
    public $row;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'basicStatisticsReportSubItemName' => 'BasicStatisticsReportSubItemName',
        'count'                            => 'Count',
        'percentage'                       => 'Percentage',
        'row'                              => 'Row',
        'value'                            => 'Value',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicStatisticsReportSubItemName'])) {
            $model->basicStatisticsReportSubItemName = $map['BasicStatisticsReportSubItemName'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
