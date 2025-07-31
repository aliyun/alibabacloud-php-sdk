<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetResourceByVersionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example udf_sleep.jar
     *
     * @var string
     */
    public $name;

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
     * @example 1030111021
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $versionId;
    protected $_name = [
        'name' => 'Name',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'versionId' => 'VersionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return GetResourceByVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
