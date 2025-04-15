<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\imageTreeChar;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\textTreeChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\treeChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\voiceTreeChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\y;

class labelStatChart extends Model
{
    /**
     * @var imageTreeChar[]
     */
    public $imageTreeChar;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var textTreeChart[]
     */
    public $textTreeChart;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var treeChart[]
     */
    public $treeChart;

    /**
     * @var voiceTreeChart[]
     */
    public $voiceTreeChart;

    /**
     * @var string[]
     */
    public $x;

    /**
     * @var y[]
     */
    public $y;
    protected $_name = [
        'imageTreeChar' => 'ImageTreeChar',
        'serviceCode' => 'ServiceCode',
        'textTreeChart' => 'TextTreeChart',
        'totalCount' => 'TotalCount',
        'treeChart' => 'TreeChart',
        'voiceTreeChart' => 'VoiceTreeChart',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        if (\is_array($this->imageTreeChar)) {
            Model::validateArray($this->imageTreeChar);
        }
        if (\is_array($this->textTreeChart)) {
            Model::validateArray($this->textTreeChart);
        }
        if (\is_array($this->treeChart)) {
            Model::validateArray($this->treeChart);
        }
        if (\is_array($this->voiceTreeChart)) {
            Model::validateArray($this->voiceTreeChart);
        }
        if (\is_array($this->x)) {
            Model::validateArray($this->x);
        }
        if (\is_array($this->y)) {
            Model::validateArray($this->y);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageTreeChar) {
            if (\is_array($this->imageTreeChar)) {
                $res['ImageTreeChar'] = [];
                $n1 = 0;
                foreach ($this->imageTreeChar as $item1) {
                    $res['ImageTreeChar'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->textTreeChart) {
            if (\is_array($this->textTreeChart)) {
                $res['TextTreeChart'] = [];
                $n1 = 0;
                foreach ($this->textTreeChart as $item1) {
                    $res['TextTreeChart'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->treeChart) {
            if (\is_array($this->treeChart)) {
                $res['TreeChart'] = [];
                $n1 = 0;
                foreach ($this->treeChart as $item1) {
                    $res['TreeChart'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->voiceTreeChart) {
            if (\is_array($this->voiceTreeChart)) {
                $res['VoiceTreeChart'] = [];
                $n1 = 0;
                foreach ($this->voiceTreeChart as $item1) {
                    $res['VoiceTreeChart'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->x) {
            if (\is_array($this->x)) {
                $res['X'] = [];
                $n1 = 0;
                foreach ($this->x as $item1) {
                    $res['X'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->y) {
            if (\is_array($this->y)) {
                $res['Y'] = [];
                $n1 = 0;
                foreach ($this->y as $item1) {
                    $res['Y'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageTreeChar'])) {
            if (!empty($map['ImageTreeChar'])) {
                $model->imageTreeChar = [];
                $n1 = 0;
                foreach ($map['ImageTreeChar'] as $item1) {
                    $model->imageTreeChar[$n1++] = imageTreeChar::fromMap($item1);
                }
            }
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['TextTreeChart'])) {
            if (!empty($map['TextTreeChart'])) {
                $model->textTreeChart = [];
                $n1 = 0;
                foreach ($map['TextTreeChart'] as $item1) {
                    $model->textTreeChart[$n1++] = textTreeChart::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TreeChart'])) {
            if (!empty($map['TreeChart'])) {
                $model->treeChart = [];
                $n1 = 0;
                foreach ($map['TreeChart'] as $item1) {
                    $model->treeChart[$n1++] = treeChart::fromMap($item1);
                }
            }
        }

        if (isset($map['VoiceTreeChart'])) {
            if (!empty($map['VoiceTreeChart'])) {
                $model->voiceTreeChart = [];
                $n1 = 0;
                foreach ($map['VoiceTreeChart'] as $item1) {
                    $model->voiceTreeChart[$n1++] = voiceTreeChart::fromMap($item1);
                }
            }
        }

        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = [];
                $n1 = 0;
                foreach ($map['X'] as $item1) {
                    $model->x[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = [];
                $n1 = 0;
                foreach ($map['Y'] as $item1) {
                    $model->y[$n1++] = y::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
