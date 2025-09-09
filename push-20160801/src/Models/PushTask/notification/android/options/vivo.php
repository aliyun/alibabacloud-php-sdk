<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class vivo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $importance;

    /**
     * @var string
     */
    public $receiptId;
    protected $_name = [
        'category' => 'Category',
        'importance' => 'Importance',
        'receiptId' => 'ReceiptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
        }

        if (null !== $this->receiptId) {
            $res['ReceiptId'] = $this->receiptId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        if (isset($map['ReceiptId'])) {
            $model->receiptId = $map['ReceiptId'];
        }

        return $model;
    }
}
