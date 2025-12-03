<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup;

class VServerGroups extends Model
{
    /**
     * @var VServerGroup[]
     */
    public $VServerGroup;
    protected $_name = [
        'VServerGroup' => 'VServerGroup',
    ];

    public function validate()
    {
        if (\is_array($this->VServerGroup)) {
            Model::validateArray($this->VServerGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->VServerGroup) {
            if (\is_array($this->VServerGroup)) {
                $res['VServerGroup'] = [];
                $n1 = 0;
                foreach ($this->VServerGroup as $item1) {
                    $res['VServerGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VServerGroup'])) {
            if (!empty($map['VServerGroup'])) {
                $model->VServerGroup = [];
                $n1 = 0;
                foreach ($map['VServerGroup'] as $item1) {
                    $model->VServerGroup[$n1] = VServerGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
