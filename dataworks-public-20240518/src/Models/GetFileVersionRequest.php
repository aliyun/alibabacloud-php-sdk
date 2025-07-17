<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetFileVersionRequest extends Model
{
    /**
     * @description The file ID. You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 1000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The file version whose information you want to query.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description The DataWorks workspace ID. You can click the Workspace Manage icon in the upper-right corner of the DataStudio page to go to the Workspace page and query the workspace ID.
     *
     * @example 1000011
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The unique identifier of the DataWorks workspace. You can view the identifier in the upper part of the DataStudio page. You can also select another identifier to switch to another workspace.
     *
     * You must configure either this parameter or the ProjectId parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'fileId' => 'FileId',
        'fileVersion' => 'FileVersion',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        return $model;
    }
}
