<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentResponse;

use AlibabaCloud\Tea\Model;

class itemIds extends Model
{
    /**
     * @var string[]
     */
    public $itemId;
    protected $_name = [
        'itemId' => 'ItemId',
    ];

    public function validate()
    {
        Model::validateRequired('itemId', $this->itemId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            if (!empty($map['ItemId'])) {
                $model->itemId = $map['ItemId'];
            }
        }

        return $model;
    }
}
