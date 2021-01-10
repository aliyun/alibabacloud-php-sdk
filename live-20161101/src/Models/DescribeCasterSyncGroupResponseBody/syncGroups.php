<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterSyncGroupResponseBody\syncGroups\syncGroup;
use AlibabaCloud\Tea\Model;

class syncGroups extends Model
{
    /**
     * @var syncGroup[]
     */
    public $syncGroup;
    protected $_name = [
        'syncGroup' => 'SyncGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->syncGroup) {
            $res['SyncGroup'] = [];
            if (null !== $this->syncGroup && \is_array($this->syncGroup)) {
                $n = 0;
                foreach ($this->syncGroup as $item) {
                    $res['SyncGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SyncGroup'])) {
            if (!empty($map['SyncGroup'])) {
                $model->syncGroup = [];
                $n                = 0;
                foreach ($map['SyncGroup'] as $item) {
                    $model->syncGroup[$n++] = null !== $item ? syncGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
