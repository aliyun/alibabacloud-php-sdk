<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataServiceApiAuthorityRequest extends Model
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
     * @description The ID of the workspace to which the access permissions on the API are granted.
     *
     * This parameter is required.
     * @example 10002
     *
     * @var int
     */
    public $authorizedProjectId;

    /**
     * @description The end time of the validity period of the access permissions. The time must be a UNIX timestamp. Unit: seconds. Example: 1600531564, which indicates 2020-09-20 00:06:04 (UTC+8).
     *
     * This parameter is required.
     * @example 1600531564
     *
     * @var int
     */
    public $endTime;

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
     * @example 1004
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId'               => 'ApiId',
        'authorizedProjectId' => 'AuthorizedProjectId',
        'endTime'             => 'EndTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return CreateDataServiceApiAuthorityRequest
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
