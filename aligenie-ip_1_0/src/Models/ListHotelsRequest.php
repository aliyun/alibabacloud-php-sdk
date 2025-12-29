<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsRequest\hotelRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsRequest\page;

class ListHotelsRequest extends Model
{
    /**
     * @var hotelRequest
     */
    public $hotelRequest;

    /**
     * @var page
     */
    public $page;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'hotelRequest' => 'HotelRequest',
        'page' => 'Page',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->hotelRequest) {
            $this->hotelRequest->validate();
        }
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelRequest) {
            $res['HotelRequest'] = null !== $this->hotelRequest ? $this->hotelRequest->toArray($noStream) : $this->hotelRequest;
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
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
            $model->hotelRequest = hotelRequest::fromMap($map['HotelRequest']);
        }

        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
