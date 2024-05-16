<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class EstablishRelationTableToBusinessRequest extends Model
{
    /**
     * @description The ID of the workflow. You can call the [ListBusiness](https://help.aliyun.com/document_detail/173945.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1000001
     *
     * @var string
     */
    public $businessId;

    /**
     * @description The ID of the folder. You can call the [GetFolder](https://help.aliyun.com/document_detail/173952.html) or [ListFolders](https://help.aliyun.com/document_detail/173955.html) operation to query the ID.
     *
     * @example 2eb6f9****
     *
     * @var string
     */
    public $folderId;

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
     * @example dw
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The universally unique identifier (UUID) of the table. You can call the [SearchMetaTables](https://help.aliyun.com/document_detail/173919.html) operation to query the UUID.
     *
     * This parameter is required.
     * @example odps.dw_project.tb1
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'businessId'        => 'BusinessId',
        'folderId'          => 'FolderId',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'tableGuid'         => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstablishRelationTableToBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
