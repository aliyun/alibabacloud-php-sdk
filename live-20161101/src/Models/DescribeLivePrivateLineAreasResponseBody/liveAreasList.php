<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList\liveArea;

class liveAreasList extends Model
{
    /**
     * @var liveArea[]
     */
    public $liveArea;
    protected $_name = [
        'liveArea' => 'LiveArea',
    ];

    public function validate()
    {
        if (\is_array($this->liveArea)) {
            Model::validateArray($this->liveArea);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveArea) {
            if (\is_array($this->liveArea)) {
                $res['LiveArea'] = [];
                $n1 = 0;
                foreach ($this->liveArea as $item1) {
                    $res['LiveArea'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveArea'])) {
            if (!empty($map['LiveArea'])) {
                $model->liveArea = [];
                $n1 = 0;
                foreach ($map['LiveArea'] as $item1) {
                    $model->liveArea[$n1] = liveArea::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
