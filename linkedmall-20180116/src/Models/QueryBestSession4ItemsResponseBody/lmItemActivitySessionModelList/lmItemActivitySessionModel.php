<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList\lmItemActivitySessionModel\lmActivitySessionModel;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModel extends Model
{
    /**
     * @var int
     */
    public $itemId;

    /**
     * @var lmActivitySessionModel
     */
    public $lmActivitySessionModel;

    /**
     * @var string
     */
    public $lmItemId;
    protected $_name = [
        'itemId'                 => 'ItemId',
        'lmActivitySessionModel' => 'LmActivitySessionModel',
        'lmItemId'               => 'LmItemId',
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
        if (null !== $this->lmActivitySessionModel) {
            $res['LmActivitySessionModel'] = null !== $this->lmActivitySessionModel ? $this->lmActivitySessionModel->toMap() : null;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivitySessionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmActivitySessionModel'])) {
            $model->lmActivitySessionModel = lmActivitySessionModel::fromMap($map['LmActivitySessionModel']);
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }

        return $model;
    }
}
