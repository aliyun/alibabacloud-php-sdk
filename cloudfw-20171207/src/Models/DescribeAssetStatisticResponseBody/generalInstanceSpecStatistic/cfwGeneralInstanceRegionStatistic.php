<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody\generalInstanceSpecStatistic;

use AlibabaCloud\Dara\Model;

class cfwGeneralInstanceRegionStatistic extends Model
{
    /**
     * @var string[]
     */
    public $memberList;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'memberList' => 'MemberList',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->memberList)) {
            Model::validateArray($this->memberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberList) {
            if (\is_array($this->memberList)) {
                $res['MemberList'] = [];
                $n1 = 0;
                foreach ($this->memberList as $item1) {
                    $res['MemberList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['MemberList'])) {
            if (!empty($map['MemberList'])) {
                $model->memberList = [];
                $n1 = 0;
                foreach ($map['MemberList'] as $item1) {
                    $model->memberList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
