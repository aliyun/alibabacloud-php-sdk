<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetFileRequest extends Model
{
    /**
     * @description The ID of the file. You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to obtain the ID.
     *
     * @example 100000001
     *
     * @var int
     */
    public $fileId;

    /**
     * @description The ID of the node that is scheduled. You can call the [ListFiles](https://help.aliyun.com/document_detail/173942.html) operation to obtain the node ID.
     *
     * @example 200000001
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * You must configure this parameter or the ProjectIdentifier parameter to determine the DataWorks workspace to which the operation is applied.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace name.
     *
     * You must configure this parameter or the ProjectId parameter to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'fileId'            => 'FileId',
        'nodeId'            => 'NodeId',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
     * @return GetFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
