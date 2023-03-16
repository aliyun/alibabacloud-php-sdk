<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceGroupsRequest extends Model
{
    /**
     * @description The keyword of a business process name. The keyword is used to search for business processes whose names contain this keyword.
     *
     * @example Test business process
     *
     * @var string
     */
    public $groupNameKeyword;

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
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10001
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'groupNameKeyword' => 'GroupNameKeyword',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'projectId'        => 'ProjectId',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNameKeyword) {
            $res['GroupNameKeyword'] = $this->groupNameKeyword;
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
     * @return ListDataServiceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupNameKeyword'])) {
            $model->groupNameKeyword = $map['GroupNameKeyword'];
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
