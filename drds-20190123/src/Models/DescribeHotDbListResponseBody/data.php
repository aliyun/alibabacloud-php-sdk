<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the databases on which hot-spot scale-out is performed.
     *
     * @var list_
     */
    public $list;

    /**
     * @description The random number.
     *
     * @example jzhz
     *
     * @var string
     */
    public $randomCode;
    protected $_name = [
        'list'       => 'List',
        'randomCode' => 'RandomCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->randomCode) {
            $res['RandomCode'] = $this->randomCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['RandomCode'])) {
            $model->randomCode = $map['RandomCode'];
        }

        return $model;
    }
}
