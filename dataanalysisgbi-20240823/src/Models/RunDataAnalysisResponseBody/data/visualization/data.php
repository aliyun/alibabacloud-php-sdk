<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\visualization;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example bar
     *
     * @var string
     */
    public $plotType;

    /**
     * @var string[]
     */
    public $xAxis;

    /**
     * @var string[]
     */
    public $yAxis;
    protected $_name = [
        'plotType' => 'plotType',
        'xAxis'    => 'xAxis',
        'yAxis'    => 'yAxis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plotType) {
            $res['plotType'] = $this->plotType;
        }
        if (null !== $this->xAxis) {
            $res['xAxis'] = $this->xAxis;
        }
        if (null !== $this->yAxis) {
            $res['yAxis'] = $this->yAxis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['plotType'])) {
            $model->plotType = $map['plotType'];
        }
        if (isset($map['xAxis'])) {
            if (!empty($map['xAxis'])) {
                $model->xAxis = $map['xAxis'];
            }
        }
        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = $map['yAxis'];
            }
        }

        return $model;
    }
}
