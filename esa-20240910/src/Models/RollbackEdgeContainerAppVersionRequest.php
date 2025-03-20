<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class RollbackEdgeContainerAppVersionRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The remarks.
     *
     * @example test rollback app
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The ID of version that you want to roll back.
     *
     * This parameter is required.
     *
     * @example ver-87962637161651****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId' => 'AppId',
        'remarks' => 'Remarks',
        'versionId' => 'VersionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackEdgeContainerAppVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
