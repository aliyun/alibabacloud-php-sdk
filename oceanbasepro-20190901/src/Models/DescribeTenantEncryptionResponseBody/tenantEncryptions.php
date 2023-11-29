<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantEncryptionResponseBody;

use AlibabaCloud\Tea\Model;

class tenantEncryptions extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enableEncryption;

    /**
     * @example xxx
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @example INTERNAL
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $status;

    /**
     * @example t4louaeei****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $tenantMode;

    /**
     * @example forMySQLTenant
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $tenantStatus;
    protected $_name = [
        'enableEncryption' => 'EnableEncryption',
        'encryptionKeyId'  => 'EncryptionKeyId',
        'encryptionType'   => 'EncryptionType',
        'status'           => 'Status',
        'tenantId'         => 'TenantId',
        'tenantMode'       => 'TenantMode',
        'tenantName'       => 'TenantName',
        'tenantStatus'     => 'TenantStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableEncryption) {
            $res['EnableEncryption'] = $this->enableEncryption;
        }
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->tenantStatus) {
            $res['TenantStatus'] = $this->tenantStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantEncryptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEncryption'])) {
            $model->enableEncryption = $map['EnableEncryption'];
        }
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TenantStatus'])) {
            $model->tenantStatus = $map['TenantStatus'];
        }

        return $model;
    }
}
