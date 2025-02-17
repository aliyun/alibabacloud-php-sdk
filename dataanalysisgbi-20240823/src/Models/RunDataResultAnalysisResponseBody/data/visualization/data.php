<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataResultAnalysisResponseBody\data\visualization;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
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
        if (\is_array($this->xAxis)) {
            Model::validateArray($this->xAxis);
        }
        if (\is_array($this->yAxis)) {
            Model::validateArray($this->yAxis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->plotType) {
            $res['plotType'] = $this->plotType;
        }

        if (null !== $this->xAxis) {
            if (\is_array($this->xAxis)) {
                $res['xAxis'] = [];
                $n1           = 0;
                foreach ($this->xAxis as $item1) {
                    $res['xAxis'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->yAxis) {
            if (\is_array($this->yAxis)) {
                $res['yAxis'] = [];
                $n1           = 0;
                foreach ($this->yAxis as $item1) {
                    $res['yAxis'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['plotType'])) {
            $model->plotType = $map['plotType'];
        }

        if (isset($map['xAxis'])) {
            if (!empty($map['xAxis'])) {
                $model->xAxis = [];
                $n1           = 0;
                foreach ($map['xAxis'] as $item1) {
                    $model->xAxis[$n1++] = $item1;
                }
            }
        }

        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = [];
                $n1           = 0;
                foreach ($map['yAxis'] as $item1) {
                    $model->yAxis[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
