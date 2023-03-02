<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SubmitFileRequest extends Model
{
    /**
     * @description The description of the commit operation.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the file. You can call the [ListFiles](~~173942~~) operation to query the ID.
     *
     * @example 1000000
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace ID. You must configure either this parameter or the ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace name. You must configure either this parameter or the ProjectId parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description Specifies whether to skip the pre-publish check after the file is committed.
     *
     *   false: indicates that the pre-publish check is not skipped. After the file is committed, the pre-publish check is automatically triggered. The file can be deployed only after the file passes the check.
     *   true: indicates that the pre-publish check is skipped. After the file is submitted, the pre-publish check process is not triggered. You can directly publish the file.
     *
     * @example false
     *
     * @var bool
     */
    public $skipAllDeployFileExtensions;
    protected $_name = [
        'comment'                     => 'Comment',
        'fileId'                      => 'FileId',
        'projectId'                   => 'ProjectId',
        'projectIdentifier'           => 'ProjectIdentifier',
        'skipAllDeployFileExtensions' => 'SkipAllDeployFileExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->skipAllDeployFileExtensions) {
            $res['SkipAllDeployFileExtensions'] = $this->skipAllDeployFileExtensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['SkipAllDeployFileExtensions'])) {
            $model->skipAllDeployFileExtensions = $map['SkipAllDeployFileExtensions'];
        }

        return $model;
    }
}
