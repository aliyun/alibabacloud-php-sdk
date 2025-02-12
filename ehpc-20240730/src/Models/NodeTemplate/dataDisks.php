<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\NodeTemplate;

use AlibabaCloud\Dara\Model;

class dataDisks extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var bool
     */
    public $deleteWithInstance;
    /**
     * @var string
     */
    public $device;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $mountDir;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'category'           => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'device'             => 'Device',
        'level'              => 'Level',
        'mountDir'           => 'MountDir',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }

        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }

        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
