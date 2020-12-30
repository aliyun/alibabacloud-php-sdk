<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var string[]
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
            $res['Snapshot'] = $this->snapshot;
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
                $model->snapshot = $map['Snapshot'];
            }
        }

        return $model;
    }
}
