<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody\lmActivityModelExtList\lmActivityModelV2Ext;
use AlibabaCloud\Tea\Model;

class lmActivityModelExtList extends Model
{
    /**
     * @var lmActivityModelV2Ext[]
     */
    public $lmActivityModelV2Ext;
    protected $_name = [
        'lmActivityModelV2Ext' => 'LmActivityModelV2Ext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivityModelV2Ext) {
            $res['LmActivityModelV2Ext'] = [];
            if (null !== $this->lmActivityModelV2Ext && \is_array($this->lmActivityModelV2Ext)) {
                $n = 0;
                foreach ($this->lmActivityModelV2Ext as $item) {
                    $res['LmActivityModelV2Ext'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityModelExtList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivityModelV2Ext'])) {
            if (!empty($map['LmActivityModelV2Ext'])) {
                $model->lmActivityModelV2Ext = [];
                $n                           = 0;
                foreach ($map['LmActivityModelV2Ext'] as $item) {
                    $model->lmActivityModelV2Ext[$n++] = null !== $item ? lmActivityModelV2Ext::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
