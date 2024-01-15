<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCdsFileRequest extends Model
{
    /**
     * @description The ID of the cloud disk.
     *
     * @example cn-hangzhou+cds-82414*****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The policy that is used when the file that you want to upload has the same name as an existing file in the cloud disk.
     *
     * Valid values:
     *
     *   refuse
     *
     * .
     *
     *   auto_rename
     *
     * .
     *
     *   ignore
     *
     * .
     *
     *   over_write
     *
     * .
     * @example ignore
     *
     * @var string
     */
    public $conflictPolicy;

    /**
     * @description The user ID.
     *
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The hash value of the SHA1 algorithm that is used by the file.
     *
     * @example 7C4A8D09CA3762AF61E59520943DC26494F8****
     *
     * @var string
     */
    public $fileHash;

    /**
     * @description The file size. Unit: bytes.
     *
     * @example 2048
     *
     * @var int
     */
    public $fileLength;

    /**
     * @description The file name.
     *
     * @example testFile.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file type.
     *
     * Valid values:
     *
     *   file
     *
     * <!-- -->
     *
     *   folder
     *
     * <!-- -->
     * @example file
     *
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the parent folder.
     *
     * @example 637c9163b453b1a384874264ba79f3f9eab9****
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateCdsFileRequest
     */
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
