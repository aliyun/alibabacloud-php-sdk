<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListDiskOpsEventsResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListDiskOpsEventsResponseBody\eventList\diskOpsEventInfo;
use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var diskOpsEventInfo[]
     */
    public $diskOpsEventInfo;
    protected $_name = [
        'diskOpsEventInfo' => 'DiskOpsEventInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskOpsEventInfo) {
            $res['DiskOpsEventInfo'] = [];
            if (null !== $this->diskOpsEventInfo && \is_array($this->diskOpsEventInfo)) {
                $n = 0;
                foreach ($this->diskOpsEventInfo as $item) {
                    $res['DiskOpsEventInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskOpsEventInfo'])) {
            if (!empty($map['DiskOpsEventInfo'])) {
                $model->diskOpsEventInfo = [];
                $n                       = 0;
                foreach ($map['DiskOpsEventInfo'] as $item) {
                    $model->diskOpsEventInfo[$n++] = null !== $item ? diskOpsEventInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
