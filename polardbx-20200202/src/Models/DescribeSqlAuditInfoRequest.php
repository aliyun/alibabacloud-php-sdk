<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeSqlAuditInfoRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $auditAccountName;

    /**
     * @var string
     */
    public $auditAccountPassword;
    protected $_name = [
        'regionId'             => 'RegionId',
        'DBInstanceId'         => 'DBInstanceId',
        'auditAccountName'     => 'AuditAccountName',
        'auditAccountPassword' => 'AuditAccountPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->auditAccountName) {
            $res['AuditAccountName'] = $this->auditAccountName;
        }
        if (null !== $this->auditAccountPassword) {
            $res['AuditAccountPassword'] = $this->auditAccountPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSqlAuditInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['AuditAccountName'])) {
            $model->auditAccountName = $map['AuditAccountName'];
        }
        if (isset($map['AuditAccountPassword'])) {
            $model->auditAccountPassword = $map['AuditAccountPassword'];
        }

        return $model;
    }
}
