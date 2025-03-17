<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdsFileRequest extends Model
{
    /**
     * @description The cloud disk ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+cds-64326*****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The processing mode of files that have the same name.
     *
     * Valid values:
     *
     *   refuse
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * refuses to create a file that has the same name as the file in the cloud.
     *
     * <!-- -->
     *
     *   auto_rename
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * automatically renames a file if the file has the same name as another file. By default, the current point in time is appended. Example: xxx20060102_150405.
     *
     * <!-- -->
     *
     *   ignore
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * allows files with the same name.
     *
     * <!-- -->
     *
     * @example ignore
     *
     * @var string
     */
    public $conflictPolicy;

    /**
     * @description The ID of the end user who uses the cloud disk.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The file ID.
     *
     * This parameter is required.
     *
     * @example 6333e553a133ce21e6f747cf948bb9ef95d7****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The file name.
     *
     * This parameter is required.
     *
     * @example test.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The group ID.
     *
     * @example cg-i1ruuudp92qpj****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'conflictPolicy' => 'ConflictPolicy',
        'endUserId' => 'EndUserId',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCdsFileRequest
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
