<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAttachInfoResponseBody;

use AlibabaCloud\Dara\Model;

class attachInfos extends Model
{
    /**
     * @var string
     */
    public $attachedAt;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $kvcsId;

    /**
     * @var string
     */
    public $mountPointId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vscId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'attachedAt' => 'AttachedAt',
        'capacity' => 'Capacity',
        'kvcsId' => 'KvcsId',
        'mountPointId' => 'MountPointId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'type' => 'Type',
        'vscId' => 'VscId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedAt) {
            $res['AttachedAt'] = $this->attachedAt;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->kvcsId) {
            $res['KvcsId'] = $this->kvcsId;
        }

        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedAt'])) {
            $model->attachedAt = $map['AttachedAt'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['KvcsId'])) {
            $model->kvcsId = $map['KvcsId'];
        }

        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
