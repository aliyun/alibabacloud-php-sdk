<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateFolderRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Business_process/System_Data/MaxCompute/import_layer
     *
     * @var string
     */
    public $folderPath;

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
        'folderPath' => 'FolderPath',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate() {}

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
