<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponseBody\resultModule;

use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponseBody\resultModule\bandOfferList\bandOfferList;
use AlibabaCloud\Tea\Model;

class bandOfferList extends Model
{
    /**
     * @var bandOfferList[]
     */
    public $bandOfferList;
    protected $_name = [
        'bandOfferList' => 'BandOfferList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandOfferList) {
            $res['BandOfferList'] = [];
            if (null !== $this->bandOfferList && \is_array($this->bandOfferList)) {
                $n = 0;
                foreach ($this->bandOfferList as $item) {
                    $res['BandOfferList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandOfferList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandOfferList'])) {
            if (!empty($map['BandOfferList'])) {
                $model->bandOfferList = [];
                $n                    = 0;
                foreach ($map['BandOfferList'] as $item) {
                    $model->bandOfferList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
