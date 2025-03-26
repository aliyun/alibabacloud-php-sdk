<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data\visualization;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $plotType;

    /**
     * @var bool
     */
    public $stack;

    /**
     * @var string[]
     */
    public $xAxis;

    /**
     * @var string[]
     */
    public $yAxis;
    protected $_name = [
        'option' => 'option',
        'plotType' => 'plotType',
        'stack' => 'stack',
        'xAxis' => 'xAxis',
        'yAxis' => 'yAxis',
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
        if (null !== $this->option) {
            $res['option'] = $this->option;
        }

        if (null !== $this->plotType) {
            $res['plotType'] = $this->plotType;
        }

        if (null !== $this->stack) {
            $res['stack'] = $this->stack;
        }

        if (null !== $this->xAxis) {
            if (\is_array($this->xAxis)) {
                $res['xAxis'] = [];
                $n1 = 0;
                foreach ($this->xAxis as $item1) {
                    $res['xAxis'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->yAxis) {
            if (\is_array($this->yAxis)) {
                $res['yAxis'] = [];
                $n1 = 0;
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
        if (isset($map['option'])) {
            $model->option = $map['option'];
        }

        if (isset($map['plotType'])) {
            $model->plotType = $map['plotType'];
        }

        if (isset($map['stack'])) {
            $model->stack = $map['stack'];
        }

        if (isset($map['xAxis'])) {
            if (!empty($map['xAxis'])) {
                $model->xAxis = [];
                $n1 = 0;
                foreach ($map['xAxis'] as $item1) {
                    $model->xAxis[$n1++] = $item1;
                }
            }
        }

        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = [];
                $n1 = 0;
                foreach ($map['yAxis'] as $item1) {
                    $model->yAxis[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
