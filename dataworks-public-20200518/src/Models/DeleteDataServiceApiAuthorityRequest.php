<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataServiceApiAuthorityRequest extends Model
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
    protected $_name = [
        'tenantId'            => 'TenantId',
        'projectId'           => 'ProjectId',
        'apiId'               => 'ApiId',
        'authorizedProjectId' => 'AuthorizedProjectId',
    ];

    public function validate()
    {
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

        return $model;
    }
}
