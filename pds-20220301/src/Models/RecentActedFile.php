<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class RecentActedFile extends Model
{
    /**
     * @var string[]
     */
    public $actionList;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var bool
     */
    public $driveIsHandover;

    /**
     * @var string
     */
    public $driveName;

    /**
     * @var string
     */
    public $driveOwnerId;

    /**
     * @var string
     */
    public $driveOwnerType;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var bool
     */
    public $trashed;
    protected $_name = [
        'actionList' => 'action_list',
        'category' => 'category',
        'deleted' => 'deleted',
        'driveId' => 'drive_id',
        'driveIsHandover' => 'drive_is_handover',
        'driveName' => 'drive_name',
        'driveOwnerId' => 'drive_owner_id',
        'driveOwnerType' => 'drive_owner_type',
        'fileId' => 'file_id',
        'fileName' => 'file_name',
        'size' => 'size',
        'thumbnail' => 'thumbnail',
        'trashed' => 'trashed',
    ];

    public function validate()
    {
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['action_list'] = [];
                $n1 = 0;
                foreach ($this->actionList as $item1) {
                    $res['action_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->driveIsHandover) {
            $res['drive_is_handover'] = $this->driveIsHandover;
        }

        if (null !== $this->driveName) {
            $res['drive_name'] = $this->driveName;
        }

        if (null !== $this->driveOwnerId) {
            $res['drive_owner_id'] = $this->driveOwnerId;
        }

        if (null !== $this->driveOwnerType) {
            $res['drive_owner_type'] = $this->driveOwnerType;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
        }

        if (null !== $this->trashed) {
            $res['trashed'] = $this->trashed;
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
        if (isset($map['action_list'])) {
            if (!empty($map['action_list'])) {
                $model->actionList = [];
                $n1 = 0;
                foreach ($map['action_list'] as $item1) {
                    $model->actionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['drive_is_handover'])) {
            $model->driveIsHandover = $map['drive_is_handover'];
        }

        if (isset($map['drive_name'])) {
            $model->driveName = $map['drive_name'];
        }

        if (isset($map['drive_owner_id'])) {
            $model->driveOwnerId = $map['drive_owner_id'];
        }

        if (isset($map['drive_owner_type'])) {
            $model->driveOwnerType = $map['drive_owner_type'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }

        if (isset($map['trashed'])) {
            $model->trashed = $map['trashed'];
        }

        return $model;
    }
}
