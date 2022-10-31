<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupRequest;

use AlibabaCloud\Tea\Model;

class syncGroup extends Model
{
    /**
     * @var string
     */
    public $hostResourceId;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var int
     */
    public $syncDelayThreshold;

    /**
     * @var int[]
     */
    public $syncOffsets;
    protected $_name = [
        'hostResourceId'     => 'HostResourceId',
        'mode'               => 'Mode',
        'resourceIds'        => 'ResourceIds',
        'syncDelayThreshold' => 'SyncDelayThreshold',
        'syncOffsets'        => 'SyncOffsets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostResourceId) {
            $res['HostResourceId'] = $this->hostResourceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->syncDelayThreshold) {
            $res['SyncDelayThreshold'] = $this->syncDelayThreshold;
        }
        if (null !== $this->syncOffsets) {
            $res['SyncOffsets'] = $this->syncOffsets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostResourceId'])) {
            $model->hostResourceId = $map['HostResourceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['SyncDelayThreshold'])) {
            $model->syncDelayThreshold = $map['SyncDelayThreshold'];
        }
        if (isset($map['SyncOffsets'])) {
            if (!empty($map['SyncOffsets'])) {
                $model->syncOffsets = $map['SyncOffsets'];
            }
        }

        return $model;
    }
}
