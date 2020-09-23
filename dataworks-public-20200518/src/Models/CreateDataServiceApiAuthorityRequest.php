<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataServiceApiAuthorityRequest extends Model
{
    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $authorizedProjectId;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'tenantId'            => 'TenantId',
        'projectId'           => 'ProjectId',
        'apiId'               => 'ApiId',
        'authorizedProjectId' => 'AuthorizedProjectId',
        'endTime'             => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('authorizedProjectId', $this->authorizedProjectId, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->authorizedProjectId) {
            $res['AuthorizedProjectId'] = $this->authorizedProjectId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AuthorizedProjectId'])) {
            $model->authorizedProjectId = $map['AuthorizedProjectId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
