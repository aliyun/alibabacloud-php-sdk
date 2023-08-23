<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListServiceQAShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @example a7***83
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
        'active'     => 'Active',
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
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
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
     * @return ListServiceQAShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
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
