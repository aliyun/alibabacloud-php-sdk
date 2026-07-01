<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class VerifyAgenticDBTenantApiKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var bool
     */
    public $valid;
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
        'DBClusterId' => 'DBClusterId',
        'expireTime' => 'ExpireTime',
        'reason' => 'Reason',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
        'valid' => 'Valid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
