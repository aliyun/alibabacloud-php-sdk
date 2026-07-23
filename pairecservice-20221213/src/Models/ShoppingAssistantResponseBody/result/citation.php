<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\result;

use AlibabaCloud\Dara\Model;

class citation extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'itemId' => 'ItemId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
