<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList\lmItemActivitySessionModel\lmActivitySessionModel;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModel extends Model
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
     * @var lmActivitySessionModel
     */
    public $lmActivitySessionModel;
    protected $_name = [
        'lmItemId'               => 'LmItemId',
        'itemId'                 => 'ItemId',
        'lmActivitySessionModel' => 'LmActivitySessionModel',
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
        if (null !== $this->lmActivitySessionModel) {
            $res['LmActivitySessionModel'] = null !== $this->lmActivitySessionModel ? $this->lmActivitySessionModel->toMap() : null;
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
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmActivitySessionModel'])) {
            $model->lmActivitySessionModel = lmActivitySessionModel::fromMap($map['LmActivitySessionModel']);
        }

        return $model;
    }
}
