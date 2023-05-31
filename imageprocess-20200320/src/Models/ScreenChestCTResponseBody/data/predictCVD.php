<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\predictCVD\lesion;
use AlibabaCloud\Tea\Model;

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
        'lesion'            => 'Lesion',
        'seriesInstanceUid' => 'SeriesInstanceUid',
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
        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predictCVD
     */
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
