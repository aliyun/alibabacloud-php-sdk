<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList\lmItemActivityModel;
use AlibabaCloud\Tea\Model;

class lmItemActivityModelList extends Model
{
    /**
     * @var lmItemActivityModel[]
     */
    public $lmItemActivityModel;
    protected $_name = [
        'lmItemActivityModel' => 'LmItemActivityModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemActivityModel) {
            $res['LmItemActivityModel'] = [];
            if (null !== $this->lmItemActivityModel && \is_array($this->lmItemActivityModel)) {
                $n = 0;
                foreach ($this->lmItemActivityModel as $item) {
                    $res['LmItemActivityModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivityModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemActivityModel'])) {
            if (!empty($map['LmItemActivityModel'])) {
                $model->lmItemActivityModel = [];
                $n                          = 0;
                foreach ($map['LmItemActivityModel'] as $item) {
                    $model->lmItemActivityModel[$n++] = null !== $item ? lmItemActivityModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
