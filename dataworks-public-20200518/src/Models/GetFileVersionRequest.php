<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetFileVersionRequest extends Model
{
    /**
     * @description The ID of the file. You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The file version whose details you want to query.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description The ID of the DataWorks workspace. You can click the Workspace Manage icon in the upper-right corner of the DataStudio page to go to the Workspace Management page and view the workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The unique identifier of the DataWorks workspace. You can click the identifier in the upper-left corner of the DataStudio page to switch to another workspace.
     *
     * You must specify either this parameter or ProjectId to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'fileId'            => 'FileId',
        'fileVersion'       => 'FileVersion',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate()
    {
    }

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
