<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataServiceApiAuthorityRequest extends Model
{
    /**
     * @description The ID of the API.
     *
     * This parameter is required.
     * @example 10001
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The ID of the workspace from which you want to revoke the access permissions on the API.
     *
     * This parameter is required.
     * @example 10002
     *
     * @var int
     */
    public $authorizedProjectId;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example 10003
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10004
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId'               => 'ApiId',
        'authorizedProjectId' => 'AuthorizedProjectId',
        'projectId'           => 'ProjectId',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->authorizedProjectId) {
            $res['AuthorizedProjectId'] = $this->authorizedProjectId;
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
     * @return DeleteDataServiceApiAuthorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AuthorizedProjectId'])) {
            $model->authorizedProjectId = $map['AuthorizedProjectId'];
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
