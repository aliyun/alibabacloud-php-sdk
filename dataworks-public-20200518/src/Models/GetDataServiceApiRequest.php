<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDataServiceApiRequest extends Model
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
    protected $_name = [
        'tenantId'  => 'TenantId',
        'projectId' => 'ProjectId',
        'apiId'     => 'ApiId',
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        return $model;
    }
}
