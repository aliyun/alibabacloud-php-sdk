<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class EnableRightsSeparationRequest extends Model
{
    /**
     * @example test123
     *
     * @var string
     */
    public $auditAccountDescription;

    /**
     * @description This parameter is required.
     *
     * @example account_audit
     *
     * @var string
     */
    public $auditAccountName;

    /**
     * @description This parameter is required.
     *
     * @example ******
     *
     * @var string
     */
    public $auditAccountPassword;

    /**
     * @description This parameter is required.
     *
     * @example pxc-htri0ori2r4k9p
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test123
     *
     * @var string
     */
    public $securityAccountDescription;

    /**
     * @description This parameter is required.
     *
     * @example account_sec
     *
     * @var string
     */
    public $securityAccountName;

    /**
     * @description This parameter is required.
     *
     * @example *****
     *
     * @var string
     */
    public $securityAccountPassword;
    protected $_name = [
        'auditAccountDescription'    => 'AuditAccountDescription',
        'auditAccountName'           => 'AuditAccountName',
        'auditAccountPassword'       => 'AuditAccountPassword',
        'DBInstanceName'             => 'DBInstanceName',
        'regionId'                   => 'RegionId',
        'securityAccountDescription' => 'SecurityAccountDescription',
        'securityAccountName'        => 'SecurityAccountName',
        'securityAccountPassword'    => 'SecurityAccountPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditAccountDescription) {
            $res['AuditAccountDescription'] = $this->auditAccountDescription;
        }
        if (null !== $this->auditAccountName) {
            $res['AuditAccountName'] = $this->auditAccountName;
        }
        if (null !== $this->auditAccountPassword) {
            $res['AuditAccountPassword'] = $this->auditAccountPassword;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityAccountDescription) {
            $res['SecurityAccountDescription'] = $this->securityAccountDescription;
        }
        if (null !== $this->securityAccountName) {
            $res['SecurityAccountName'] = $this->securityAccountName;
        }
        if (null !== $this->securityAccountPassword) {
            $res['SecurityAccountPassword'] = $this->securityAccountPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableRightsSeparationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditAccountDescription'])) {
            $model->auditAccountDescription = $map['AuditAccountDescription'];
        }
        if (isset($map['AuditAccountName'])) {
            $model->auditAccountName = $map['AuditAccountName'];
        }
        if (isset($map['AuditAccountPassword'])) {
            $model->auditAccountPassword = $map['AuditAccountPassword'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityAccountDescription'])) {
            $model->securityAccountDescription = $map['SecurityAccountDescription'];
        }
        if (isset($map['SecurityAccountName'])) {
            $model->securityAccountName = $map['SecurityAccountName'];
        }
        if (isset($map['SecurityAccountPassword'])) {
            $model->securityAccountPassword = $map['SecurityAccountPassword'];
        }

        return $model;
    }
}
