<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result\failedItems\item;

class failedItems extends Model
{
    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var item
     */
    public $item;
    protected $_name = [
        'errMessage' => 'ErrMessage',
        'item' => 'Item',
    ];

    public function validate()
    {
        if (null !== $this->item) {
            $this->item->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->item) {
            $res['Item'] = null !== $this->item ? $this->item->toArray($noStream) : $this->item;
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
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['Item'])) {
            $model->item = item::fromMap($map['Item']);
        }

        return $model;
    }
}
