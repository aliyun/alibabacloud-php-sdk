<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponseBody\data\data\top1;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponseBody\data\data\topk;

class data extends Model
{
    /**
     * @var float[]
     */
    public $bbox;

    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $idx;

    /**
     * @var top1
     */
    public $top1;

    /**
     * @var topk[]
     */
    public $topk;
    protected $_name = [
        'bbox' => 'Bbox',
        'error' => 'Error',
        'idx' => 'Idx',
        'top1' => 'Top1',
        'topk' => 'Topk',
    ];

    public function validate()
    {
        if (\is_array($this->bbox)) {
            Model::validateArray($this->bbox);
        }
        if (null !== $this->top1) {
            $this->top1->validate();
        }
        if (\is_array($this->topk)) {
            Model::validateArray($this->topk);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bbox) {
            if (\is_array($this->bbox)) {
                $res['Bbox'] = [];
                $n1 = 0;
                foreach ($this->bbox as $item1) {
                    $res['Bbox'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->idx) {
            $res['Idx'] = $this->idx;
        }

        if (null !== $this->top1) {
            $res['Top1'] = null !== $this->top1 ? $this->top1->toArray($noStream) : $this->top1;
        }

        if (null !== $this->topk) {
            if (\is_array($this->topk)) {
                $res['Topk'] = [];
                $n1 = 0;
                foreach ($this->topk as $item1) {
                    $res['Topk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Bbox'])) {
            if (!empty($map['Bbox'])) {
                $model->bbox = [];
                $n1 = 0;
                foreach ($map['Bbox'] as $item1) {
                    $model->bbox[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Idx'])) {
            $model->idx = $map['Idx'];
        }

        if (isset($map['Top1'])) {
            $model->top1 = top1::fromMap($map['Top1']);
        }

        if (isset($map['Topk'])) {
            if (!empty($map['Topk'])) {
                $model->topk = [];
                $n1 = 0;
                foreach ($map['Topk'] as $item1) {
                    $model->topk[$n1] = topk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
