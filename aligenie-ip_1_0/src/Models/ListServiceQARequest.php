<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQARequest\page;
use AlibabaCloud\Tea\Model;

class ListServiceQARequest extends Model
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
     * @var page
     */
    public $page;
    protected $_name = [
        'active'  => 'Active',
        'hotelId' => 'HotelId',
        'keyword' => 'Keyword',
        'page'    => 'Page',
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
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceQARequest
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
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
