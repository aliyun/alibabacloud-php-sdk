<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponseBody\data\workZoneDTOList;

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
        'totalCount' => 'TotalCount',
        'workZoneDTOList' => 'WorkZoneDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->workZoneDTOList)) {
            Model::validateArray($this->workZoneDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->workZoneDTOList) {
            if (\is_array($this->workZoneDTOList)) {
                $res['WorkZoneDTOList'] = [];
                $n1 = 0;
                foreach ($this->workZoneDTOList as $item1) {
                    $res['WorkZoneDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WorkZoneDTOList'])) {
            if (!empty($map['WorkZoneDTOList'])) {
                $model->workZoneDTOList = [];
                $n1 = 0;
                foreach ($map['WorkZoneDTOList'] as $item1) {
                    $model->workZoneDTOList[$n1] = workZoneDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
