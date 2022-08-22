<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest\payload\page;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var page
     */
    public $page;
    protected $_name = [
        'page' => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
