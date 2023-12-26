<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries;

use AlibabaCloud\Tea\Model;

class entrie extends Model
{
    /**
     * @description The time when the fileset was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The fileset description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The fileset path.
     *
     * @example pathtoroot/fset
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The fileset ID.
     *
     * @example fset-1902718ea0ae****
     *
     * @var string
     */
    public $fsetId;

    /**
     * @description The fileset status. Valid values:
     *
     *   CREATING: The fileset is being created.
     *   CREATED: The fileset has been created and is running properly.
     *   RELEASING: The fileset is being released.
     *   RELEASED: The fileset has been deleted.
     *
     * @example CREATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the fileset was last updated.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'fileSystemPath' => 'FileSystemPath',
        'fsetId'         => 'FsetId',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entrie
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
