<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class layerTasks extends Model
{
    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $syncedSize;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $syncLayerTaskId;

    /**
     * @var string
     */
    public $artifactDigest;
    protected $_name = [
        'taskStatus'      => 'TaskStatus',
        'digest'          => 'Digest',
        'syncedSize'      => 'SyncedSize',
        'size'            => 'Size',
        'syncLayerTaskId' => 'SyncLayerTaskId',
        'artifactDigest'  => 'ArtifactDigest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->syncedSize) {
            $res['SyncedSize'] = $this->syncedSize;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->syncLayerTaskId) {
            $res['SyncLayerTaskId'] = $this->syncLayerTaskId;
        }
        if (null !== $this->artifactDigest) {
            $res['ArtifactDigest'] = $this->artifactDigest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layerTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['SyncedSize'])) {
            $model->syncedSize = $map['SyncedSize'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SyncLayerTaskId'])) {
            $model->syncLayerTaskId = $map['SyncLayerTaskId'];
        }
        if (isset($map['ArtifactDigest'])) {
            $model->artifactDigest = $map['ArtifactDigest'];
        }

        return $model;
    }
}
