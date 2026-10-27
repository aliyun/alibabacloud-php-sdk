<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePxfsTenantResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'quotaBytes' => 'QuotaBytes',
        'quotaFiles' => 'QuotaFiles',
        'rateLimitRps' => 'RateLimitRps',
        'rateLimitWbps' => 'RateLimitWbps',
        'status' => 'Status',
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
