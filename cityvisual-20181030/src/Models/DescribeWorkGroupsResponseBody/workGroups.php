<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeWorkGroupsResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeWorkGroupsResponseBody\workGroups\workGroup;
use AlibabaCloud\Tea\Model;

class workGroups extends Model
{
    /**
     * @var workGroup[]
     */
    public $workGroup;
    protected $_name = [
        'workGroup' => 'WorkGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workGroup) {
            $res['WorkGroup'] = [];
            if (null !== $this->workGroup && \is_array($this->workGroup)) {
                $n = 0;
                foreach ($this->workGroup as $item) {
                    $res['WorkGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkGroup'])) {
            if (!empty($map['WorkGroup'])) {
                $model->workGroup = [];
                $n                = 0;
                foreach ($map['WorkGroup'] as $item) {
                    $model->workGroup[$n++] = null !== $item ? workGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
