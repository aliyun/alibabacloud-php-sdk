<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageResponseBody\data;

use AlibabaCloud\Dara\Model;

class snapshotList extends Model
{
    /**
     * @var string
     */
    public $bindType;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $diskSubType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'bindType' => 'BindType',
        'diskCategory' => 'DiskCategory',
        'diskSubType' => 'DiskSubType',
        'diskType' => 'DiskType',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }

        if (null !== $this->diskSubType) {
            $res['DiskSubType'] = $this->diskSubType;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }

        if (isset($map['DiskSubType'])) {
            $model->diskSubType = $map['DiskSubType'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
