<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class MoveCdsFileRequest extends Model
{
    /**
     * @description The ID of the cloud disk.
     *
     * @example cn-hangzhou+cds-346063****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The processing mode of files that have the same name.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     * @example ignore
     *
     * @var string
     */
    public $conflictPolicy;

    /**
     * @description The user ID that you want to use to access the cloud disk.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the file.
     *
     * @example 63f3257b68b018170b194d87b875512d108f****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The group ID.
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the parent folder that you want to move. If you want to remove the root folder, set the value to root.
     *
     * @example 6409848a6da91d6240604e7ba7337d85ba8a1****
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
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
        'fileId'         => 'FileId',
        'groupId'        => 'GroupId',
        'parentFolderId' => 'ParentFolderId',
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
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
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

    /**
     * @param array $map
     *
     * @return MoveCdsFileRequest
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
