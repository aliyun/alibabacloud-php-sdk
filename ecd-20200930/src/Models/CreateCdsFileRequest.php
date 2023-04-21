<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCdsFileRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-82414*****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @example ignore
     *
     * @var string
     */
    public $conflictPolicy;

    /**
     * @example test1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 7C4A8D09CA3762AF61E59520943DC26494F8****
     *
     * @var string
     */
    public $fileHash;

    /**
     * @example 2048
     *
     * @var int
     */
    public $fileLength;

    /**
     * @example testFile.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @example file
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 637c9163b453b1a384874264ba79f3f9eab9****
     *
     * @var string
     */
    public $parentFileId;

    /**
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
        if (isset($map['ParentFileId'])) {
            $model->parentFileId = $map['ParentFileId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
