<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponseBody\data\invoices\items\itemRoi;

use AlibabaCloud\Tea\Model;

class size extends Model
{
    /**
     * @var float
     */
    public $w;

    /**
     * @var float
     */
    public $h;
    protected $_name = [
        'w' => 'W',
        'h' => 'H',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
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
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }

        return $model;
    }
}
