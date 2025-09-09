<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_;

class data extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @var string
     */
    public $randomCode;
    protected $_name = [
        'list' => 'List',
        'randomCode' => 'RandomCode',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->randomCode) {
            $res['RandomCode'] = $this->randomCode;
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
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        if (isset($map['RandomCode'])) {
            $model->randomCode = $map['RandomCode'];
        }

        return $model;
    }
}
