<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupsResponseBody\groupList;

class ListLiveMessageGroupsResponseBody extends Model
{
    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var bool
     */
    public $hasmore;

    /**
     * @var string
     */
    public $nextpageToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupList' => 'GroupList',
        'hasmore' => 'Hasmore',
        'nextpageToken' => 'NextpageToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasmore) {
            $res['Hasmore'] = $this->hasmore;
        }

        if (null !== $this->nextpageToken) {
            $res['NextpageToken'] = $this->nextpageToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1] = groupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hasmore'])) {
            $model->hasmore = $map['Hasmore'];
        }

        if (isset($map['NextpageToken'])) {
            $model->nextpageToken = $map['NextpageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
