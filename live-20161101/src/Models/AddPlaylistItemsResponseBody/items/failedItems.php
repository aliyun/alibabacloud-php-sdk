<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddPlaylistItemsResponseBody\items;

use AlibabaCloud\Dara\Model;

class failedItems extends Model
{
    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;
    protected $_name = [
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
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

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
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

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        return $model;
    }
}
