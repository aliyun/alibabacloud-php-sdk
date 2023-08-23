<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListCustomQAShrinkRequest extends Model
{
    /**
     * @example 520a0c0***5eb
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example ***
     *
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $pageShrink;
    protected $_name = [
        'hotelId'    => 'HotelId',
        'keyword'    => 'Keyword',
        'pageShrink' => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomQAShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
        }

        return $model;
    }
}
