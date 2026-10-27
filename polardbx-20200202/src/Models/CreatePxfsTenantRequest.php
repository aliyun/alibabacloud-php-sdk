<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreatePxfsTenantRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $quotaBytes;

    /**
     * @var int
     */
    public $quotaFiles;

    /**
     * @var int
     */
    public $rateLimitRps;

    /**
     * @var int
     */
    public $rateLimitWbps;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'quotaBytes' => 'QuotaBytes',
        'quotaFiles' => 'QuotaFiles',
        'rateLimitRps' => 'RateLimitRps',
        'rateLimitWbps' => 'RateLimitWbps',
        'regionId' => 'RegionId',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->quotaBytes) {
            $res['QuotaBytes'] = $this->quotaBytes;
        }

        if (null !== $this->quotaFiles) {
            $res['QuotaFiles'] = $this->quotaFiles;
        }

        if (null !== $this->rateLimitRps) {
            $res['RateLimitRps'] = $this->rateLimitRps;
        }

        if (null !== $this->rateLimitWbps) {
            $res['RateLimitWbps'] = $this->rateLimitWbps;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['QuotaBytes'])) {
            $model->quotaBytes = $map['QuotaBytes'];
        }

        if (isset($map['QuotaFiles'])) {
            $model->quotaFiles = $map['QuotaFiles'];
        }

        if (isset($map['RateLimitRps'])) {
            $model->rateLimitRps = $map['RateLimitRps'];
        }

        if (isset($map['RateLimitWbps'])) {
            $model->rateLimitWbps = $map['RateLimitWbps'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
