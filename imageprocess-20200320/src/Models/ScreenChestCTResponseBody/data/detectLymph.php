<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLymph\lesions;

class detectLymph extends Model
{
    /**
     * @var lesions[]
     */
    public $lesions;

    /**
     * @var string
     */
    public $seriesInstanceUID;
    protected $_name = [
        'lesions' => 'Lesions',
        'seriesInstanceUID' => 'SeriesInstanceUID',
    ];

    public function validate()
    {
        if (\is_array($this->lesions)) {
            Model::validateArray($this->lesions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lesions) {
            if (\is_array($this->lesions)) {
                $res['Lesions'] = [];
                $n1 = 0;
                foreach ($this->lesions as $item1) {
                    $res['Lesions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->seriesInstanceUID) {
            $res['SeriesInstanceUID'] = $this->seriesInstanceUID;
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
        if (isset($map['Lesions'])) {
            if (!empty($map['Lesions'])) {
                $model->lesions = [];
                $n1 = 0;
                foreach ($map['Lesions'] as $item1) {
                    $model->lesions[$n1++] = lesions::fromMap($item1);
                }
            }
        }

        if (isset($map['SeriesInstanceUID'])) {
            $model->seriesInstanceUID = $map['SeriesInstanceUID'];
        }

        return $model;
    }
}
