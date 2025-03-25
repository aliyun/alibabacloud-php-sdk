<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\predictCVD\lesion;

class predictCVD extends Model
{
    /**
     * @var lesion
     */
    public $lesion;

    /**
     * @var string
     */
    public $seriesInstanceUid;
    protected $_name = [
        'lesion' => 'Lesion',
        'seriesInstanceUid' => 'SeriesInstanceUid',
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

        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
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

        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }

        return $model;
    }
}
