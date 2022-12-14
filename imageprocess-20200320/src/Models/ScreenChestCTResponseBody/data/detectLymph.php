<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLymph\lesions;
use AlibabaCloud\Tea\Model;

class detectLymph extends Model
{
    /**
     * @var lesions[]
     */
    public $lesions;

    /**
     * @example 1.2.568.200036.9116.2.6.1.44063.1805049129.1357480934.650139
     *
     * @var string
     */
    public $seriesInstanceUID;
    protected $_name = [
        'lesions'           => 'Lesions',
        'seriesInstanceUID' => 'SeriesInstanceUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lesions) {
            $res['Lesions'] = [];
            if (null !== $this->lesions && \is_array($this->lesions)) {
                $n = 0;
                foreach ($this->lesions as $item) {
                    $res['Lesions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->seriesInstanceUID) {
            $res['SeriesInstanceUID'] = $this->seriesInstanceUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectLymph
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lesions'])) {
            if (!empty($map['Lesions'])) {
                $model->lesions = [];
                $n              = 0;
                foreach ($map['Lesions'] as $item) {
                    $model->lesions[$n++] = null !== $item ? lesions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SeriesInstanceUID'])) {
            $model->seriesInstanceUID = $map['SeriesInstanceUID'];
        }

        return $model;
    }
}
