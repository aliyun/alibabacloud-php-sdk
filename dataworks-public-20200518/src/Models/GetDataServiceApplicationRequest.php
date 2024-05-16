<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can view the information about the application in the API Gateway console.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $applicationId;

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
        'applicationId' => 'ApplicationId',
        'projectId'     => 'ProjectId',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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
     * @return GetDataServiceApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
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
