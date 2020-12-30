<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups\VServerGroup;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = [];
            if (null !== $this->VServerGroup && \is_array($this->VServerGroup)) {
                $n = 0;
                foreach ($this->VServerGroup as $item) {
                    $res['VServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VServerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroup'])) {
            if (!empty($map['VServerGroup'])) {
                $model->VServerGroup = [];
                $n                   = 0;
                foreach ($map['VServerGroup'] as $item) {
                    $model->VServerGroup[$n++] = null !== $item ? VServerGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
