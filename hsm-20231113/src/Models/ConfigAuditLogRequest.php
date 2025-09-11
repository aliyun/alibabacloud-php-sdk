<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class ConfigAuditLogRequest extends Model
{
    /**
     * @var string
     */
    public $auditAction;

    /**
     * @var string
     */
    public $auditOssBucket;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'auditAction' => 'AuditAction',
        'auditOssBucket' => 'AuditOssBucket',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
