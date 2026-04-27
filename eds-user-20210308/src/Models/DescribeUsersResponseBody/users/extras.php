<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users\extras\resourcePolicyList;

class extras extends Model
{
    /**
     * @var mixed[]
     */
    public $assignedResourceCount;

    /**
     * @var resourcePolicyList[]
     */
    public $resourcePolicyList;
    protected $_name = [
        'assignedResourceCount' => 'AssignedResourceCount',
        'resourcePolicyList' => 'ResourcePolicyList',
    ];

    public function validate()
    {
        if (\is_array($this->assignedResourceCount)) {
            Model::validateArray($this->assignedResourceCount);
        }
        if (\is_array($this->resourcePolicyList)) {
            Model::validateArray($this->resourcePolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedResourceCount) {
            if (\is_array($this->assignedResourceCount)) {
                $res['AssignedResourceCount'] = [];
                foreach ($this->assignedResourceCount as $key1 => $value1) {
                    $res['AssignedResourceCount'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourcePolicyList) {
            if (\is_array($this->resourcePolicyList)) {
                $res['ResourcePolicyList'] = [];
                $n1 = 0;
                foreach ($this->resourcePolicyList as $item1) {
                    $res['ResourcePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssignedResourceCount'])) {
            if (!empty($map['AssignedResourceCount'])) {
                $model->assignedResourceCount = [];
                foreach ($map['AssignedResourceCount'] as $key1 => $value1) {
                    $model->assignedResourceCount[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourcePolicyList'])) {
            if (!empty($map['ResourcePolicyList'])) {
                $model->resourcePolicyList = [];
                $n1 = 0;
                foreach ($map['ResourcePolicyList'] as $item1) {
                    $model->resourcePolicyList[$n1] = resourcePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
