<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class layerTasks extends Model
{
    /**
     * @var string
     */
    public $artifactDigest;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $syncLayerTaskId;

    /**
     * @var int
     */
    public $syncedSize;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'artifactDigest'  => 'ArtifactDigest',
        'digest'          => 'Digest',
        'size'            => 'Size',
        'syncLayerTaskId' => 'SyncLayerTaskId',
        'syncedSize'      => 'SyncedSize',
        'taskStatus'      => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactDigest) {
            $res['ArtifactDigest'] = $this->artifactDigest;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->syncLayerTaskId) {
            $res['SyncLayerTaskId'] = $this->syncLayerTaskId;
        }
        if (null !== $this->syncedSize) {
            $res['SyncedSize'] = $this->syncedSize;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['ArtifactDigest'])) {
            $model->artifactDigest = $map['ArtifactDigest'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SyncLayerTaskId'])) {
            $model->syncLayerTaskId = $map['SyncLayerTaskId'];
        }
        if (isset($map['SyncedSize'])) {
            $model->syncedSize = $map['SyncedSize'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
