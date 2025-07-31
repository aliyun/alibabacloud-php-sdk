<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesResponseBody\pageResult\computeSourceList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var computeSourceList[]
     */
    public $computeSourceList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'computeSourceList' => 'ComputeSourceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeSourceList) {
            $res['ComputeSourceList'] = [];
            if (null !== $this->computeSourceList && \is_array($this->computeSourceList)) {
                $n = 0;
                foreach ($this->computeSourceList as $item) {
                    $res['ComputeSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ComputeSourceList'])) {
            if (!empty($map['ComputeSourceList'])) {
                $model->computeSourceList = [];
                $n = 0;
                foreach ($map['ComputeSourceList'] as $item) {
                    $model->computeSourceList[$n++] = null !== $item ? computeSourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
