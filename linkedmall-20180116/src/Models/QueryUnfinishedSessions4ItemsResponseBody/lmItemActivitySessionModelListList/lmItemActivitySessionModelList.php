<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList\lmItemActivitySessionModelList\lmActivitySessionModels;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModelList extends Model
{
    /**
     * @example 60716881****
     *
     * @var int
     */
    public $itemId;

    /**
     * @var lmActivitySessionModels
     */
    public $lmActivitySessionModels;

    /**
     * @example 10000230-60716881****
     *
     * @var string
     */
    public $lmItemId;
    protected $_name = [
        'itemId'                  => 'ItemId',
        'lmActivitySessionModels' => 'LmActivitySessionModels',
        'lmItemId'                => 'LmItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmActivitySessionModels) {
            $res['LmActivitySessionModels'] = null !== $this->lmActivitySessionModels ? $this->lmActivitySessionModels->toMap() : null;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmActivitySessionModels'])) {
            $model->lmActivitySessionModels = lmActivitySessionModels::fromMap($map['LmActivitySessionModels']);
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }

        return $model;
    }
}
