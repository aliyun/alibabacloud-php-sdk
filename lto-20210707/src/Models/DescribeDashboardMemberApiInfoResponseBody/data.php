<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberApiInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeDashboardMemberApiInfoResponseBody\data\memberInfoList;

class data extends Model
{
    /**
     * @var memberInfoList[]
     */
    public $memberInfoList;

    /**
     * @var string
     */
    public $memberName;
    protected $_name = [
        'memberInfoList' => 'MemberInfoList',
        'memberName' => 'MemberName',
    ];

    public function validate()
    {
        if (\is_array($this->memberInfoList)) {
            Model::validateArray($this->memberInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberInfoList) {
            if (\is_array($this->memberInfoList)) {
                $res['MemberInfoList'] = [];
                $n1 = 0;
                foreach ($this->memberInfoList as $item1) {
                    $res['MemberInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
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
        if (isset($map['MemberInfoList'])) {
            if (!empty($map['MemberInfoList'])) {
                $model->memberInfoList = [];
                $n1 = 0;
                foreach ($map['MemberInfoList'] as $item1) {
                    $model->memberInfoList[$n1] = memberInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        return $model;
    }
}
