<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiImpactsResponseBody\pageResult\impactList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var impactList[]
     */
    public $impactList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'impactList' => 'ImpactList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->impactList) {
            $res['ImpactList'] = [];
            if (null !== $this->impactList && \is_array($this->impactList)) {
                $n = 0;
                foreach ($this->impactList as $item) {
                    $res['ImpactList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImpactList'])) {
            if (!empty($map['ImpactList'])) {
                $model->impactList = [];
                $n = 0;
                foreach ($map['ImpactList'] as $item) {
                    $model->impactList[$n++] = null !== $item ? impactList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
