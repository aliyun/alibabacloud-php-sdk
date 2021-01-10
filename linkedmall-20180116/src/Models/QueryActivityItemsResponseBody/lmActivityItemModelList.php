<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel;
use AlibabaCloud\Tea\Model;

class lmActivityItemModelList extends Model
{
    /**
     * @var lmActivityItemModel[]
     */
    public $lmActivityItemModel;
    protected $_name = [
        'lmActivityItemModel' => 'LmActivityItemModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivityItemModel) {
            $res['LmActivityItemModel'] = [];
            if (null !== $this->lmActivityItemModel && \is_array($this->lmActivityItemModel)) {
                $n = 0;
                foreach ($this->lmActivityItemModel as $item) {
                    $res['LmActivityItemModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityItemModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivityItemModel'])) {
            if (!empty($map['LmActivityItemModel'])) {
                $model->lmActivityItemModel = [];
                $n                          = 0;
                foreach ($map['LmActivityItemModel'] as $item) {
                    $model->lmActivityItemModel[$n++] = null !== $item ? lmActivityItemModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
