<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponseBody\data\workZoneDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var workZoneDTOList[]
     */
    public $workZoneDTOList;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'workZoneDTOList' => 'WorkZoneDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->workZoneDTOList) {
            $res['WorkZoneDTOList'] = [];
            if (null !== $this->workZoneDTOList && \is_array($this->workZoneDTOList)) {
                $n = 0;
                foreach ($this->workZoneDTOList as $item) {
                    $res['WorkZoneDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WorkZoneDTOList'])) {
            if (!empty($map['WorkZoneDTOList'])) {
                $model->workZoneDTOList = [];
                $n                      = 0;
                foreach ($map['WorkZoneDTOList'] as $item) {
                    $model->workZoneDTOList[$n++] = null !== $item ? workZoneDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
