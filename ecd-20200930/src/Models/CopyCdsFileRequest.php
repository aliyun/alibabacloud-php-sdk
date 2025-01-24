<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CopyCdsFileRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRename;
    /**
     * @var string
     */
    public $cdsId;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $fileId;
    /**
     * @var string
     */
    public $fileReceiverId;
    /**
     * @var string
     */
    public $fileReceiverType;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $parentFolderId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRename'       => 'AutoRename',
        'cdsId'            => 'CdsId',
        'endUserId'        => 'EndUserId',
        'fileId'           => 'FileId',
        'fileReceiverId'   => 'FileReceiverId',
        'fileReceiverType' => 'FileReceiverType',
        'groupId'          => 'GroupId',
        'parentFolderId'   => 'ParentFolderId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRename) {
            $res['AutoRename'] = $this->autoRename;
        }

        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileReceiverId) {
            $res['FileReceiverId'] = $this->fileReceiverId;
        }

        if (null !== $this->fileReceiverType) {
            $res['FileReceiverType'] = $this->fileReceiverType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AutoRename'])) {
            $model->autoRename = $map['AutoRename'];
        }

        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileReceiverId'])) {
            $model->fileReceiverId = $map['FileReceiverId'];
        }

        if (isset($map['FileReceiverType'])) {
            $model->fileReceiverType = $map['FileReceiverType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
