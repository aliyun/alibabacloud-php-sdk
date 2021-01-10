<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessions4ItemsResponseBody\lmItemActivitySessionModelListList\lmItemActivitySessionModelList;
use AlibabaCloud\Tea\Model;

class lmItemActivitySessionModelListList extends Model
{
    /**
     * @var lmItemActivitySessionModelList[]
     */
    public $lmItemActivitySessionModelList;
    protected $_name = [
        'lmItemActivitySessionModelList' => 'LmItemActivitySessionModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmItemActivitySessionModelList) {
            $res['LmItemActivitySessionModelList'] = [];
            if (null !== $this->lmItemActivitySessionModelList && \is_array($this->lmItemActivitySessionModelList)) {
                $n = 0;
                foreach ($this->lmItemActivitySessionModelList as $item) {
                    $res['LmItemActivitySessionModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmItemActivitySessionModelListList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmItemActivitySessionModelList'])) {
            if (!empty($map['LmItemActivitySessionModelList'])) {
                $model->lmItemActivitySessionModelList = [];
                $n                                     = 0;
                foreach ($map['LmItemActivitySessionModelList'] as $item) {
                    $model->lmItemActivitySessionModelList[$n++] = null !== $item ? lmItemActivitySessionModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
