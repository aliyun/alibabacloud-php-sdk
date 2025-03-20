<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data;

use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\imageTreeChar;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\treeChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\voiceTreeChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart\y;
use AlibabaCloud\Tea\Model;

class labelStatChart extends Model
{
    /**
     * @var imageTreeChar[]
     */
    public $imageTreeChar;

    /**
     * @example nickNameDetection
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example 117
     *
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
        'totalCount' => 'TotalCount',
        'treeChart' => 'TreeChart',
        'voiceTreeChart' => 'VoiceTreeChart',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageTreeChar) {
            $res['ImageTreeChar'] = [];
            if (null !== $this->imageTreeChar && \is_array($this->imageTreeChar)) {
                $n = 0;
                foreach ($this->imageTreeChar as $item) {
                    $res['ImageTreeChar'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->treeChart) {
            $res['TreeChart'] = [];
            if (null !== $this->treeChart && \is_array($this->treeChart)) {
                $n = 0;
                foreach ($this->treeChart as $item) {
                    $res['TreeChart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->voiceTreeChart) {
            $res['VoiceTreeChart'] = [];
            if (null !== $this->voiceTreeChart && \is_array($this->voiceTreeChart)) {
                $n = 0;
                foreach ($this->voiceTreeChart as $item) {
                    $res['VoiceTreeChart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = [];
            if (null !== $this->y && \is_array($this->y)) {
                $n = 0;
                foreach ($this->y as $item) {
                    $res['Y'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelStatChart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageTreeChar'])) {
            if (!empty($map['ImageTreeChar'])) {
                $model->imageTreeChar = [];
                $n = 0;
                foreach ($map['ImageTreeChar'] as $item) {
                    $model->imageTreeChar[$n++] = null !== $item ? imageTreeChar::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TreeChart'])) {
            if (!empty($map['TreeChart'])) {
                $model->treeChart = [];
                $n = 0;
                foreach ($map['TreeChart'] as $item) {
                    $model->treeChart[$n++] = null !== $item ? treeChart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VoiceTreeChart'])) {
            if (!empty($map['VoiceTreeChart'])) {
                $model->voiceTreeChart = [];
                $n = 0;
                foreach ($map['VoiceTreeChart'] as $item) {
                    $model->voiceTreeChart[$n++] = null !== $item ? voiceTreeChart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = $map['X'];
            }
        }
        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = [];
                $n = 0;
                foreach ($map['Y'] as $item) {
                    $model->y[$n++] = null !== $item ? y::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
