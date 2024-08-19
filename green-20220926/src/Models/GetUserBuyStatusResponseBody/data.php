<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Bid。
     *
     * @example 26842
     *
     * @var int
     */
    public $bid;

    /**
     * @example True
     *
     * @var bool
     */
    public $buy;

    /**
     * @example False
     *
     * @var bool
     */
    public $indebt;
    protected $_name = [
        'bid'    => 'Bid',
        'buy'    => 'Buy',
        'indebt' => 'Indebt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->buy) {
            $res['Buy'] = $this->buy;
        }
        if (null !== $this->indebt) {
            $res['Indebt'] = $this->indebt;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Buy'])) {
            $model->buy = $map['Buy'];
        }
        if (isset($map['Indebt'])) {
            $model->indebt = $map['Indebt'];
        }

        return $model;
    }
}
