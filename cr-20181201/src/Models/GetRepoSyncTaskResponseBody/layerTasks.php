<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class layerTasks extends Model
{
    /**
     * @description The digest of the artifact.
     *
     * @example sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e
     *
     * @var string
     */
    public $artifactDigest;

    /**
     * @description The digest of the image layer.
     *
     * @example sha256:36fb85fcb5e919cb60e782397a6be04201868fe7b38ef7669fc01caec1c8fc4e
     *
     * @var string
     */
    public $digest;

    /**
     * @description The size of synchronized image layers.
     *
     * @example 23655489
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the synchronization task for the image layer.
     *
     * @example rslt-074x4q20fx2d****
     *
     * @var string
     */
    public $syncLayerTaskId;

    /**
     * @description The size of the image layer that is synchronized.
     *
     * @example 23655489
     *
     * @var int
     */
    public $syncedSize;

    /**
     * @description The status of the synchronization task. Valid values:
     *
     * @example SUCCESS
     *
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
