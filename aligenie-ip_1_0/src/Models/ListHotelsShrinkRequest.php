<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListHotelsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotelRequestShrink;

    /**
     * @var string
     */
    public $pageShrink;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'hotelRequestShrink' => 'HotelRequest',
        'pageShrink' => 'Page',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelRequestShrink) {
            $res['HotelRequest'] = $this->hotelRequestShrink;
        }

        if (null !== $this->pageShrink) {
            $res['Page'] = $this->pageShrink;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['HotelRequest'])) {
            $model->hotelRequestShrink = $map['HotelRequest'];
        }

        if (isset($map['Page'])) {
            $model->pageShrink = $map['Page'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
