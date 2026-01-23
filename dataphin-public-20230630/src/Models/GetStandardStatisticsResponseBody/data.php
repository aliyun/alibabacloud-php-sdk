<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsResponseBody\data\standardTypeCountList;

class data extends Model
{
    /**
     * @var standardTypeCountList[]
     */
    public $standardTypeCountList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'standardTypeCountList' => 'StandardTypeCountList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->standardTypeCountList)) {
            Model::validateArray($this->standardTypeCountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardTypeCountList) {
            if (\is_array($this->standardTypeCountList)) {
                $res['StandardTypeCountList'] = [];
                $n1 = 0;
                foreach ($this->standardTypeCountList as $item1) {
                    $res['StandardTypeCountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['StandardTypeCountList'])) {
            if (!empty($map['StandardTypeCountList'])) {
                $model->standardTypeCountList = [];
                $n1 = 0;
                foreach ($map['StandardTypeCountList'] as $item1) {
                    $model->standardTypeCountList[$n1] = standardTypeCountList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
