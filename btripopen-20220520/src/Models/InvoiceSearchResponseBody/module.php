<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InvoiceSearchResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'id' => 'id',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
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

        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
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

        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
