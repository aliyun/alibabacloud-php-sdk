<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarksResponseBody\watermarkList\watermark;

class watermarkList extends Model
{
    /**
     * @var watermark[]
     */
    public $watermark;
    protected $_name = [
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
        if (\is_array($this->watermark)) {
            Model::validateArray($this->watermark);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->watermark) {
            if (\is_array($this->watermark)) {
                $res['Watermark'] = [];
                $n1 = 0;
                foreach ($this->watermark as $item1) {
                    $res['Watermark'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Watermark'])) {
            if (!empty($map['Watermark'])) {
                $model->watermark = [];
                $n1 = 0;
                foreach ($map['Watermark'] as $item1) {
                    $model->watermark[$n1] = watermark::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
