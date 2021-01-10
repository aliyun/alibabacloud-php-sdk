<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList\lmItemActivityModel\lmActivityPopModel;
use AlibabaCloud\Tea\Model;

class lmItemActivityModel extends Model
{
    /**
     * @var lmActivityPopModel
     */
    public $lmActivityPopModel;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;
    protected $_name = [
        'lmActivityPopModel' => 'LmActivityPopModel',
        'lmItemId'           => 'LmItemId',
        'itemId'             => 'ItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivityPopModel) {
            $res['LmActivityPopModel'] = null !== $this->lmActivityPopModel ? $this->lmActivityPopModel->toMap() : null;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivityModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivityPopModel'])) {
            $model->lmActivityPopModel = lmActivityPopModel::fromMap($map['LmActivityPopModel']);
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
