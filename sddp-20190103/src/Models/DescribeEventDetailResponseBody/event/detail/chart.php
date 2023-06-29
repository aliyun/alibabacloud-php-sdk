<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart\data;
use AlibabaCloud\Tea\Model;

class chart extends Model
{
    /**
     * @description The data in the baseline behavior profile of the anomalous event.
     *
     * @var data
     */
    public $data;

    /**
     * @description The name of the baseline behavior chart of the anomalous event.
     *
     * @example Baseline behavior chart
     *
     * @var string
     */
    public $label;

    /**
     * @description The type of the chart. Valid values:
     *
     *   **1**: column chart
     *   **2**: line chart
     *
     * @example 1
     *
     * @var string
     */
    public $type;

    /**
     * @description The descriptive label of data on the x-axis.
     *
     * @example Number of days
     *
     * @var string
     */
    public $XLabel;

    /**
     * @description The descriptive label of data on the y-axis.
     *
     * @example Value
     *
     * @var string
     */
    public $YLabel;
    protected $_name = [
        'data'   => 'Data',
        'label'  => 'Label',
        'type'   => 'Type',
        'XLabel' => 'XLabel',
        'YLabel' => 'YLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->XLabel) {
            $res['XLabel'] = $this->XLabel;
        }
        if (null !== $this->YLabel) {
            $res['YLabel'] = $this->YLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['XLabel'])) {
            $model->XLabel = $map['XLabel'];
        }
        if (isset($map['YLabel'])) {
            $model->YLabel = $map['YLabel'];
        }

        return $model;
    }
}
