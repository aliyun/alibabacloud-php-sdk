<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigAuditLogRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example enable
     *
     * @var string
     */
    public $auditAction;

    /**
     * @example hsm-log
     *
     * @var string
     */
    public $auditOssBucket;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'auditAction'    => 'AuditAction',
        'auditOssBucket' => 'AuditOssBucket',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditAction) {
            $res['AuditAction'] = $this->auditAction;
        }
        if (null !== $this->auditOssBucket) {
            $res['AuditOssBucket'] = $this->auditOssBucket;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigAuditLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditAction'])) {
            $model->auditAction = $map['AuditAction'];
        }
        if (isset($map['AuditOssBucket'])) {
            $model->auditOssBucket = $map['AuditOssBucket'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
