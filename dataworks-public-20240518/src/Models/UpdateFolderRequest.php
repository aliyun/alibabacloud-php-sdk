<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateFolderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2735c2c19d58
     *
     * @var string
     */
    public $folderId;

    /**
     * @description This parameter is required.
     *
     * @example MySecondFolder
     *
     * @var string
     */
    public $folderName;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'folderId' => 'FolderId',
        'folderName' => 'FolderName',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
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
     * @return UpdateFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
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
