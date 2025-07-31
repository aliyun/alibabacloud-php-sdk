<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class PublishDataServiceApiRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 102102
     *
     * @var int
     */
    public $apiId;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 102102
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'apiId' => 'ApiId',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'versionId' => 'VersionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishDataServiceApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
