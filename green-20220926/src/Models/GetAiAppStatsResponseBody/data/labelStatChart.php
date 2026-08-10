<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppStatsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppStatsResponseBody\data\labelStatChart\treeChart;

class labelStatChart extends Model
{
    /**
     * @var treeChart[]
     */
    public $treeChart;
    protected $_name = [
        'treeChart' => 'TreeChart',
    ];

    public function validate()
    {
        if (\is_array($this->treeChart)) {
            Model::validateArray($this->treeChart);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->treeChart) {
            if (\is_array($this->treeChart)) {
                $res['TreeChart'] = [];
                $n1 = 0;
                foreach ($this->treeChart as $item1) {
                    $res['TreeChart'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TreeChart'])) {
            if (!empty($map['TreeChart'])) {
                $model->treeChart = [];
                $n1 = 0;
                foreach ($map['TreeChart'] as $item1) {
                    $model->treeChart[$n1] = treeChart::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
