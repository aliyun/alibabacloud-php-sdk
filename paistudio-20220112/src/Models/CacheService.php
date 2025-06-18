<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->cacheInfos)) {
            Model::validateArray($this->cacheInfos);
        }
        if (\is_array($this->supportedClientQuotaIds)) {
            Model::validateArray($this->supportedClientQuotaIds);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheInfos) {
            if (\is_array($this->cacheInfos)) {
                $res['CacheInfos'] = [];
                $n1 = 0;
                foreach ($this->cacheInfos as $item1) {
                    $res['CacheInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->supportedClientQuotaIds)) {
                $res['SupportedClientQuotaIds'] = [];
                $n1 = 0;
                foreach ($this->supportedClientQuotaIds as $item1) {
                    $res['SupportedClientQuotaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
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
        if (isset($map['CacheInfos'])) {
            if (!empty($map['CacheInfos'])) {
                $model->cacheInfos = [];
                $n1 = 0;
                foreach ($map['CacheInfos'] as $item1) {
                    $model->cacheInfos[$n1] = CacheInfo::fromMap($item1);
                    ++$n1;
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
                $model->supportedClientQuotaIds = [];
                $n1 = 0;
                foreach ($map['SupportedClientQuotaIds'] as $item1) {
                    $model->supportedClientQuotaIds[$n1] = $item1;
                    ++$n1;
                }
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
