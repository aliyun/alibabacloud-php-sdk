<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponseBody\lmActivitySessionModelList\lmActivitySessionModel;
use AlibabaCloud\Tea\Model;

class lmActivitySessionModelList extends Model
{
    /**
     * @var lmActivitySessionModel[]
     */
    public $lmActivitySessionModel;
    protected $_name = [
        'lmActivitySessionModel' => 'LmActivitySessionModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivitySessionModel) {
            $res['LmActivitySessionModel'] = [];
            if (null !== $this->lmActivitySessionModel && \is_array($this->lmActivitySessionModel)) {
                $n = 0;
                foreach ($this->lmActivitySessionModel as $item) {
                    $res['LmActivitySessionModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivitySessionModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivitySessionModel'])) {
            if (!empty($map['LmActivitySessionModel'])) {
                $model->lmActivitySessionModel = [];
                $n                             = 0;
                foreach ($map['LmActivitySessionModel'] as $item) {
                    $model->lmActivitySessionModel[$n++] = null !== $item ? lmActivitySessionModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
