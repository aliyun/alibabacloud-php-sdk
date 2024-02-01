<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryStreamSnapshotJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @var int
     */
    public $snapshotInterval;

    /**
     * @var int
     */
    public $streamType;
    protected $_name = [
        'snapshotInterval' => 'SnapshotInterval',
        'streamType'       => 'StreamType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotInterval) {
            $res['SnapshotInterval'] = $this->snapshotInterval;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotInterval'])) {
            $model->snapshotInterval = $map['SnapshotInterval'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
