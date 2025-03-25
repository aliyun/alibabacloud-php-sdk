<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac\lesion;

class detectPdac extends Model
{
    /**
     * @var lesion
     */
    public $lesion;

    /**
     * @var string
     */
    public $seriesInstanceUID;
    protected $_name = [
        'lesion' => 'Lesion',
        'seriesInstanceUID' => 'SeriesInstanceUID',
    ];

    public function validate()
    {
        if (null !== $this->lesion) {
            $this->lesion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lesion) {
            $res['Lesion'] = null !== $this->lesion ? $this->lesion->toArray($noStream) : $this->lesion;
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
        if (isset($map['Lesion'])) {
            $model->lesion = lesion::fromMap($map['Lesion']);
        }

        if (isset($map['SeriesInstanceUID'])) {
            $model->seriesInstanceUID = $map['SeriesInstanceUID'];
        }

        return $model;
    }
}
