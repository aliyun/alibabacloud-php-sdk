<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\EditPlaylistResponseBody\items;

use AlibabaCloud\Tea\Model;

class successItems extends Model
{
    /**
     * @description The ID of the episode.
     *
     * @example c09f3d63-eacf-4fbf-bd48-a07a6ba7****
     *
     * @var string
     */
    public $itemId;

    /**
     * @description The name of the episode.
     *
     * @example item1
     *
     * @var string
     */
    public $itemName;
    protected $_name = [
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return successItems
     */
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
