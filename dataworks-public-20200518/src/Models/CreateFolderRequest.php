<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateFolderRequest extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * This parameter is required.
     * @var string
     */
    public $folderPath;

    /**
     * @description The name of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the workspace name. You must configure either the ProjectId or ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The path of the folder.
     *
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'folderPath'        => 'FolderPath',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderPath) {
            $res['FolderPath'] = $this->folderPath;
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
     * @return CreateFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderPath'])) {
            $model->folderPath = $map['FolderPath'];
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
