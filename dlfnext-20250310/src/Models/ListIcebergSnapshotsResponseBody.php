<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListIcebergSnapshotsResponseBody extends Model
{
    /**
     * @example E8ABEB1C3DB893D16576269017992F57
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var IcebergSnapshot[]
     */
    public $snapshots;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'snapshots' => 'snapshots',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->snapshots) {
            $res['snapshots'] = [];
            if (null !== $this->snapshots && \is_array($this->snapshots)) {
                $n = 0;
                foreach ($this->snapshots as $item) {
                    $res['snapshots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIcebergSnapshotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['snapshots'])) {
            if (!empty($map['snapshots'])) {
                $model->snapshots = [];
                $n = 0;
                foreach ($map['snapshots'] as $item) {
                    $model->snapshots[$n++] = null !== $item ? IcebergSnapshot::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
