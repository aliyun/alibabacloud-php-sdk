<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceFoldersRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $folderNameKeyword;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'projectId'         => 'ProjectId',
        'tenantId'          => 'TenantId',
        'groupId'           => 'GroupId',
        'folderNameKeyword' => 'FolderNameKeyword',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->folderNameKeyword) {
            $res['FolderNameKeyword'] = $this->folderNameKeyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceFoldersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['FolderNameKeyword'])) {
            $model->folderNameKeyword = $map['FolderNameKeyword'];
        }

        return $model;
    }
}
