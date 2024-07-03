<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result;

use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result\failedItems\item;
use AlibabaCloud\Tea\Model;

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
        'item'       => 'Item',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->item) {
            $res['Item'] = null !== $this->item ? $this->item->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedItems
     */
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
