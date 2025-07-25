<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CacheService extends Model
{
    /**
     * @var CacheInfo[]
     */
    public $cacheInfos;

    /**
     * @var string
     */
    public $cacheServiceId;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedClientQuotaIds;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'cacheInfos' => 'CacheInfos',
        'cacheServiceId' => 'CacheServiceId',
        'createdBy' => 'CreatedBy',
        'gmtCreated' => 'GmtCreated',
        'quotaId' => 'QuotaId',
        'status' => 'Status',
        'supportedClientQuotaIds' => 'SupportedClientQuotaIds',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'userVpc' => 'UserVpc',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheInfos) {
            $res['CacheInfos'] = [];
            if (null !== $this->cacheInfos && \is_array($this->cacheInfos)) {
                $n = 0;
                foreach ($this->cacheInfos as $item) {
                    $res['CacheInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cacheServiceId) {
            $res['CacheServiceId'] = $this->cacheServiceId;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedClientQuotaIds) {
            $res['SupportedClientQuotaIds'] = $this->supportedClientQuotaIds;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CacheService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheInfos'])) {
            if (!empty($map['CacheInfos'])) {
                $model->cacheInfos = [];
                $n = 0;
                foreach ($map['CacheInfos'] as $item) {
                    $model->cacheInfos[$n++] = null !== $item ? CacheInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CacheServiceId'])) {
            $model->cacheServiceId = $map['CacheServiceId'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedClientQuotaIds'])) {
            if (!empty($map['SupportedClientQuotaIds'])) {
                $model->supportedClientQuotaIds = $map['SupportedClientQuotaIds'];
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
