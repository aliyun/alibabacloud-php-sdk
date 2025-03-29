<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bid;

    /**
     * @var bool
     */
    public $buy;

    /**
     * @var bool
     */
    public $indebt;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'bid' => 'Bid',
        'buy' => 'Buy',
        'indebt' => 'Indebt',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['Buy'])) {
            $model->buy = $map['Buy'];
        }

        if (isset($map['Indebt'])) {
            $model->indebt = $map['Indebt'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
