<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponseBody\groupsInfo;

class DescribeDBResourceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var groupsInfo[]
     */
    public $groupsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'groupsInfo' => 'GroupsInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groupsInfo)) {
            Model::validateArray($this->groupsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->groupsInfo) {
            if (\is_array($this->groupsInfo)) {
                $res['GroupsInfo'] = [];
                $n1 = 0;
                foreach ($this->groupsInfo as $item1) {
                    $res['GroupsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['GroupsInfo'])) {
            if (!empty($map['GroupsInfo'])) {
                $model->groupsInfo = [];
                $n1 = 0;
                foreach ($map['GroupsInfo'] as $item1) {
                    $model->groupsInfo[$n1] = groupsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
