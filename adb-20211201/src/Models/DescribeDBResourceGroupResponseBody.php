<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBResourceGroupResponseBody extends Model
{
    /**
     * @description The queried resource groups.
     *
     * @var groupsInfo[]
     */
    public $groupsInfo;

    /**
     * @description The request ID.
     *
     * @example A94B6C02-7BD4-5D67-9776-3AC8317E8DD3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupsInfo' => 'GroupsInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupsInfo) {
            $res['GroupsInfo'] = [];
            if (null !== $this->groupsInfo && \is_array($this->groupsInfo)) {
                $n = 0;
                foreach ($this->groupsInfo as $item) {
                    $res['GroupsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDBResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupsInfo'])) {
            if (!empty($map['GroupsInfo'])) {
                $model->groupsInfo = [];
                $n                 = 0;
                foreach ($map['GroupsInfo'] as $item) {
                    $model->groupsInfo[$n++] = null !== $item ? groupsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
