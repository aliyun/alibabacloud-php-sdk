<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class layerTasks extends Model
{
    /**
     * @var int
     */
    public $syncedSize;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $syncLayerTaskId;
    protected $_name = [
        'syncedSize'      => 'SyncedSize',
        'digest'          => 'Digest',
        'taskStatus'      => 'TaskStatus',
        'size'            => 'Size',
        'syncLayerTaskId' => 'SyncLayerTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->syncedSize) {
            $res['SyncedSize'] = $this->syncedSize;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->syncLayerTaskId) {
            $res['SyncLayerTaskId'] = $this->syncLayerTaskId;
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
        if (isset($map['SyncedSize'])) {
            $model->syncedSize = $map['SyncedSize'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SyncLayerTaskId'])) {
            $model->syncLayerTaskId = $map['SyncLayerTaskId'];
        }

        return $model;
    }
}
