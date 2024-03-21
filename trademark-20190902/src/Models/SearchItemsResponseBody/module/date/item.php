<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponseBody\module\date;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $detailViewObjectSourceDatum;

    /**
     * @var string
     */
    public $detailViewObjectSourceType;
    protected $_name = [
        'detailViewObjectSourceDatum' => 'DetailViewObjectSourceDatum',
        'detailViewObjectSourceType'  => 'DetailViewObjectSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailViewObjectSourceDatum) {
            $res['DetailViewObjectSourceDatum'] = $this->detailViewObjectSourceDatum;
        }
        if (null !== $this->detailViewObjectSourceType) {
            $res['DetailViewObjectSourceType'] = $this->detailViewObjectSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailViewObjectSourceDatum'])) {
            $model->detailViewObjectSourceDatum = $map['DetailViewObjectSourceDatum'];
        }
        if (isset($map['DetailViewObjectSourceType'])) {
            $model->detailViewObjectSourceType = $map['DetailViewObjectSourceType'];
        }

        return $model;
    }
}
