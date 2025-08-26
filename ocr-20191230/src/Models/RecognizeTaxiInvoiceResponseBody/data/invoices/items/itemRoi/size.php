<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items\itemRoi;

use AlibabaCloud\Dara\Model;

class size extends Model
{
    /**
     * @var float
     */
    public $h;

    /**
     * @var float
     */
    public $w;
    protected $_name = [
        'h' => 'H',
        'w' => 'W',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }

        if (null !== $this->w) {
            $res['W'] = $this->w;
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
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }

        if (isset($map['W'])) {
            $model->w = $map['W'];
        }

        return $model;
    }
}
