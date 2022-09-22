<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity;
use AlibabaCloud\Tea\Model;

class localDiskRepairActivities extends Model
{
    /**
     * @var localDiskRepairActivity[]
     */
    public $localDiskRepairActivity;
    protected $_name = [
        'localDiskRepairActivity' => 'LocalDiskRepairActivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localDiskRepairActivity) {
            $res['LocalDiskRepairActivity'] = [];
            if (null !== $this->localDiskRepairActivity && \is_array($this->localDiskRepairActivity)) {
                $n = 0;
                foreach ($this->localDiskRepairActivity as $item) {
                    $res['LocalDiskRepairActivity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localDiskRepairActivities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalDiskRepairActivity'])) {
            if (!empty($map['LocalDiskRepairActivity'])) {
                $model->localDiskRepairActivity = [];
                $n                              = 0;
                foreach ($map['LocalDiskRepairActivity'] as $item) {
                    $model->localDiskRepairActivity[$n++] = null !== $item ? localDiskRepairActivity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
