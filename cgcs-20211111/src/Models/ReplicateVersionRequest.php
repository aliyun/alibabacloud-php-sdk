<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ReplicateVersionRequest extends Model
{
    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;

    /**
     * @description 源头版本Id
     *
     * @var string
     */
    public $sourceVersionId;

    /**
     * @description 复制目标版本Id
     *
     * @var string
     */
    public $targetVersionId;

    /**
     * @description 租户Id
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'appId'           => 'AppId',
        'sourceVersionId' => 'SourceVersionId',
        'targetVersionId' => 'TargetVersionId',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->sourceVersionId) {
            $res['SourceVersionId'] = $this->sourceVersionId;
        }
        if (null !== $this->targetVersionId) {
            $res['TargetVersionId'] = $this->targetVersionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicateVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SourceVersionId'])) {
            $model->sourceVersionId = $map['SourceVersionId'];
        }
        if (isset($map['TargetVersionId'])) {
            $model->targetVersionId = $map['TargetVersionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
