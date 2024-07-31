<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApiRequest extends Model
{
    /**
     * @description The ID of the DataService Studio API.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $apiId;

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
     * @description The tenant ID.
     *
     * @example 10002
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId'     => 'ApiId',
        'projectId' => 'ProjectId',
        'tenantId'  => 'TenantId',
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
     * @return GetDataServiceApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
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
