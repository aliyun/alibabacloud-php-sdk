<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsResponseBody\groupList;
use AlibabaCloud\Tea\Model;

class ListLdpsComputeGroupsResponseBody extends Model
{
    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupList' => 'GroupList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupList) {
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLdpsComputeGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n                = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
