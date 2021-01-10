<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList\lmItemActivitySessionModel;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModelList extends Model
{
    /**
     * @var lmItemActivitySessionModel[]
     */
    public $lmItemActivitySessionModel;
    protected $_name = [
        'lmItemActivitySessionModel' => 'LmItemActivitySessionModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemActivitySessionModel) {
            $res['LmItemActivitySessionModel'] = [];
            if (null !== $this->lmItemActivitySessionModel && \is_array($this->lmItemActivitySessionModel)) {
                $n = 0;
                foreach ($this->lmItemActivitySessionModel as $item) {
                    $res['LmItemActivitySessionModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['LmItemActivitySessionModel'])) {
            if (!empty($map['LmItemActivitySessionModel'])) {
                $model->lmItemActivitySessionModel = [];
                $n                                 = 0;
                foreach ($map['LmItemActivitySessionModel'] as $item) {
                    $model->lmItemActivitySessionModel[$n++] = null !== $item ? lmItemActivitySessionModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
