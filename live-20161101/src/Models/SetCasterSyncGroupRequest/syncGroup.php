<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\SetCasterSyncGroupRequest;

use AlibabaCloud\Tea\Model;

class syncGroup extends Model
{
    /**
     * @var int
     */
    public $mode;

    /**
     * @var int
     */
    public $syncDelayThreshold;

    /**
     * @var string
     */
    public $hostResourceId;

    /**
     * @var string[]
     */
    public $resourceIds;
    protected $_name = [
        'mode'               => 'Mode',
        'syncDelayThreshold' => 'SyncDelayThreshold',
        'hostResourceId'     => 'HostResourceId',
        'resourceIds'        => 'ResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->syncDelayThreshold) {
            $res['SyncDelayThreshold'] = $this->syncDelayThreshold;
        }
        if (null !== $this->hostResourceId) {
            $res['HostResourceId'] = $this->hostResourceId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SyncDelayThreshold'])) {
            $model->syncDelayThreshold = $map['SyncDelayThreshold'];
        }
        if (isset($map['HostResourceId'])) {
            $model->hostResourceId = $map['HostResourceId'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }

        return $model;
    }
}
