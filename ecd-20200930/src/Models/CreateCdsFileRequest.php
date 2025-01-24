<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateCdsFileRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;
    /**
     * @var string
     */
    public $conflictPolicy;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $fileHash;
    /**
     * @var int
     */
    public $fileLength;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $parentFileId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'          => 'CdsId',
        'conflictPolicy' => 'ConflictPolicy',
        'endUserId'      => 'EndUserId',
        'fileHash'       => 'FileHash',
        'fileLength'     => 'FileLength',
        'fileName'       => 'FileName',
        'fileType'       => 'FileType',
        'groupId'        => 'GroupId',
        'parentFileId'   => 'ParentFileId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->conflictPolicy) {
            $res['ConflictPolicy'] = $this->conflictPolicy;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }

        if (null !== $this->fileLength) {
            $res['FileLength'] = $this->fileLength;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->parentFileId) {
            $res['ParentFileId'] = $this->parentFileId;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['ConflictPolicy'])) {
            $model->conflictPolicy = $map['ConflictPolicy'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }

        if (isset($map['FileLength'])) {
            $model->fileLength = $map['FileLength'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ParentFileId'])) {
            $model->parentFileId = $map['ParentFileId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
