<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListResponseBody\result\groupLiveList;

class result extends Model
{
    /**
     * @var groupLiveList[]
     */
    public $groupLiveList;
    protected $_name = [
        'groupLiveList' => 'GroupLiveList',
    ];

    public function validate()
    {
        if (\is_array($this->groupLiveList)) {
            Model::validateArray($this->groupLiveList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupLiveList) {
            if (\is_array($this->groupLiveList)) {
                $res['GroupLiveList'] = [];
                $n1                   = 0;
                foreach ($this->groupLiveList as $item1) {
                    $res['GroupLiveList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupLiveList'])) {
            if (!empty($map['GroupLiveList'])) {
                $model->groupLiveList = [];
                $n1                   = 0;
                foreach ($map['GroupLiveList'] as $item1) {
                    $model->groupLiveList[$n1++] = groupLiveList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
