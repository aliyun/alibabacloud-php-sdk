<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceFoldersRequest extends Model
{
    /**
     * @description The keyword in folder names. The keyword is used to search for folders whose names contain this keyword.
     *
     * @example Keyword in folder names
     *
     * @var string
     */
    public $folderNameKeyword;

    /**
     * @description The ID of the business process to which the folders belong.
     *
     * @example ds_123abc
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10002
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'folderNameKeyword' => 'FolderNameKeyword',
        'groupId'           => 'GroupId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'projectId'         => 'ProjectId',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderNameKeyword) {
            $res['FolderNameKeyword'] = $this->folderNameKeyword;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
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
        if (isset($map['FolderNameKeyword'])) {
            $model->folderNameKeyword = $map['FolderNameKeyword'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
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

        return $model;
    }
}
