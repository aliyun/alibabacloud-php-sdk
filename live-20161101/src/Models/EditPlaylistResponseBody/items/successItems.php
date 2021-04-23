<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody\items;

use AlibabaCloud\Tea\Model;

class successItems extends Model
{
    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $itemId;
    protected $_name = [
        'itemName' => 'ItemName',
        'itemId'   => 'ItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
