<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup\jobGroupParams\jobGroupParam;
use AlibabaCloud\Tea\Model;

class jobGroupParams extends Model
{
    /**
     * @var jobGroupParam[]
     */
    public $jobGroupParam;
    protected $_name = [
        'jobGroupParam' => 'JobGroupParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupParam) {
            $res['JobGroupParam'] = [];
            if (null !== $this->jobGroupParam && \is_array($this->jobGroupParam)) {
                $n = 0;
                foreach ($this->jobGroupParam as $item) {
                    $res['JobGroupParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroupParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupParam'])) {
            if (!empty($map['JobGroupParam'])) {
                $model->jobGroupParam = [];
                $n                    = 0;
                foreach ($map['JobGroupParam'] as $item) {
                    $model->jobGroupParam[$n++] = null !== $item ? jobGroupParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
