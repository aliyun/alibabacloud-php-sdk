<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody\module;

use AlibabaCloud\Tea\Model;

class detailPicUrl extends Model
{
    /**
     * @var string[]
     */
    public $picUlr;
    protected $_name = [
        'picUlr' => 'picUlr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUlr) {
            $res['picUlr'] = $this->picUlr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailPicUrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['picUlr'])) {
            if (!empty($map['picUlr'])) {
                $model->picUlr = $map['picUlr'];
            }
        }

        return $model;
    }
}
