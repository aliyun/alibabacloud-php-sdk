<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac\lesion;
use AlibabaCloud\Tea\Model;

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
        'lesion'            => 'Lesion',
        'seriesInstanceUID' => 'SeriesInstanceUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lesion) {
            $res['Lesion'] = null !== $this->lesion ? $this->lesion->toMap() : null;
        }
        if (null !== $this->seriesInstanceUID) {
            $res['SeriesInstanceUID'] = $this->seriesInstanceUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectPdac
     */
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
