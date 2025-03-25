<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody\data;

use AlibabaCloud\Tea\Model;

class plot extends Model
{
    /**
     * @description The title of the chart.
     *
     * @example request
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the chart.
     *
     * @example request
     *
     * @var string
     */
    public $type;

    /**
     * @description The data metric field.
     *
     * @var string[]
     */
    public $yAxis;
    protected $_name = [
        'title' => 'title',
        'type' => 'type',
        'yAxis' => 'yAxis',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->yAxis) {
            $res['yAxis'] = $this->yAxis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = $map['yAxis'];
            }
        }

        return $model;
    }
}
