<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup;
use AlibabaCloud\Tea\Model;

class jobGroups extends Model
{
    /**
     * @var jobGroup[]
     */
    public $jobGroup;
    protected $_name = [
        'jobGroup' => 'JobGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroup) {
            $res['JobGroup'] = [];
            if (null !== $this->jobGroup && \is_array($this->jobGroup)) {
                $n = 0;
                foreach ($this->jobGroup as $item) {
                    $res['JobGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroup'])) {
            if (!empty($map['JobGroup'])) {
                $model->jobGroup = [];
                $n               = 0;
                foreach ($map['JobGroup'] as $item) {
                    $model->jobGroup[$n++] = null !== $item ? jobGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
