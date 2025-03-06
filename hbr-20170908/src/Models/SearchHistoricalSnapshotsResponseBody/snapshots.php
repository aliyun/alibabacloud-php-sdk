<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\SearchHistoricalSnapshotsResponseBody\snapshots\snapshot;
use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var snapshot[]
     */
    public $snapshot;
    protected $_name = [
        'snapshot' => 'Snapshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshot) {
            $res['Snapshot'] = [];
            if (null !== $this->snapshot && \is_array($this->snapshot)) {
                $n = 0;
                foreach ($this->snapshot as $item) {
                    $res['Snapshot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Snapshot'])) {
            if (!empty($map['Snapshot'])) {
                $model->snapshot = [];
                $n               = 0;
                foreach ($map['Snapshot'] as $item) {
                    $model->snapshot[$n++] = null !== $item ? snapshot::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
