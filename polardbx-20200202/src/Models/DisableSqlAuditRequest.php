<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class DisableSqlAuditRequest extends Model
{
    /**
     * @var string
     */
    public $auditAccountName;

    /**
     * @var string
     */
    public $auditAccountPassword;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'auditAccountName' => 'AuditAccountName',
        'auditAccountPassword' => 'AuditAccountPassword',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditAccountName) {
            $res['AuditAccountName'] = $this->auditAccountName;
        }

        if (null !== $this->auditAccountPassword) {
            $res['AuditAccountPassword'] = $this->auditAccountPassword;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['AuditAccountName'])) {
            $model->auditAccountName = $map['AuditAccountName'];
        }

        if (isset($map['AuditAccountPassword'])) {
            $model->auditAccountPassword = $map['AuditAccountPassword'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
