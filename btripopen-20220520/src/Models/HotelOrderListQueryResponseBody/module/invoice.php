<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class invoice extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'id' => 'id',
        'invoiceType' => 'invoice_type',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->invoiceType) {
            $res['invoice_type'] = $this->invoiceType;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['invoice_type'])) {
            $model->invoiceType = $map['invoice_type'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
