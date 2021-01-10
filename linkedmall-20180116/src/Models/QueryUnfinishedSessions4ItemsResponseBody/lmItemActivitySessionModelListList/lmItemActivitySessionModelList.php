<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList\lmItemActivitySessionModelList\lmActivitySessionModels;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModelList extends Model
{
    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var lmActivitySessionModels
     */
    public $lmActivitySessionModels;
    protected $_name = [
        'lmItemId'                => 'LmItemId',
        'itemId'                  => 'ItemId',
        'lmActivitySessionModels' => 'LmActivitySessionModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmActivitySessionModels) {
            $res['LmActivitySessionModels'] = null !== $this->lmActivitySessionModels ? $this->lmActivitySessionModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivitySessionModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmActivitySessionModels'])) {
            $model->lmActivitySessionModels = lmActivitySessionModels::fromMap($map['LmActivitySessionModels']);
        }

        return $model;
    }
}
