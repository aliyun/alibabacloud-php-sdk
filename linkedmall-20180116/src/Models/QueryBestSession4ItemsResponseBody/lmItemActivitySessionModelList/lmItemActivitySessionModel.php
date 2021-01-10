<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList\lmItemActivitySessionModel\lmActivitySessionModel;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModel extends Model
{
    /**
     * @var lmActivitySessionModel
     */
    public $lmActivitySessionModel;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $itemId;
    protected $_name = [
        'lmActivitySessionModel' => 'LmActivitySessionModel',
        'lmItemId'               => 'LmItemId',
        'itemId'                 => 'ItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivitySessionModel) {
            $res['LmActivitySessionModel'] = null !== $this->lmActivitySessionModel ? $this->lmActivitySessionModel->toMap() : null;
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
     * @return lmItemActivitySessionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivitySessionModel'])) {
            $model->lmActivitySessionModel = lmActivitySessionModel::fromMap($map['LmActivitySessionModel']);
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
