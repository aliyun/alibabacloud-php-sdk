<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items\itemRoi;

use AlibabaCloud\Tea\Model;

class size extends Model
{
    /**
     * @example 81.999984741210938
     *
     * @var float
     */
    public $h;

    /**
     * @example 887.9998779296875
     *
     * @var float
     */
    public $w;
    protected $_name = [
        'h' => 'H',
        'w' => 'W',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return size
     */
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
