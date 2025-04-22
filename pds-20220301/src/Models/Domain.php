<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class Domain extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $dataHashName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $initDriveEnable;

    /**
     * @var int
     */
    public $initDriveSize;

    /**
     * @var string
     */
    public $parentDomainId;

    /**
     * @var AppAccessStrategy
     */
    public $publishedAppAccessStrategy;

    /**
     * @var bool
     */
    public $sharable;

    /**
     * @var int
     */
    public $sizeQuota;

    /**
     * @var int
     */
    public $sizeQuotaUsed;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $storeRedundancyType;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $usedSize;

    /**
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'createdAt' => 'created_at',
        'dataHashName' => 'data_hash_name',
        'description' => 'description',
        'domainId' => 'domain_id',
        'domainName' => 'domain_name',
        'initDriveEnable' => 'init_drive_enable',
        'initDriveSize' => 'init_drive_size',
        'parentDomainId' => 'parent_domain_id',
        'publishedAppAccessStrategy' => 'published_app_access_strategy',
        'sharable' => 'sharable',
        'sizeQuota' => 'size_quota',
        'sizeQuotaUsed' => 'size_quota_used',
        'status' => 'status',
        'storeRedundancyType' => 'store_redundancy_type',
        'updatedAt' => 'updated_at',
        'usedSize' => 'used_size',
        'userCountQuota' => 'user_count_quota',
    ];

    public function validate()
    {
        if (null !== $this->publishedAppAccessStrategy) {
            $this->publishedAppAccessStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->dataHashName) {
            $res['data_hash_name'] = $this->dataHashName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }

        if (null !== $this->domainName) {
            $res['domain_name'] = $this->domainName;
        }

        if (null !== $this->initDriveEnable) {
            $res['init_drive_enable'] = $this->initDriveEnable;
        }

        if (null !== $this->initDriveSize) {
            $res['init_drive_size'] = $this->initDriveSize;
        }

        if (null !== $this->parentDomainId) {
            $res['parent_domain_id'] = $this->parentDomainId;
        }

        if (null !== $this->publishedAppAccessStrategy) {
            $res['published_app_access_strategy'] = null !== $this->publishedAppAccessStrategy ? $this->publishedAppAccessStrategy->toArray($noStream) : $this->publishedAppAccessStrategy;
        }

        if (null !== $this->sharable) {
            $res['sharable'] = $this->sharable;
        }

        if (null !== $this->sizeQuota) {
            $res['size_quota'] = $this->sizeQuota;
        }

        if (null !== $this->sizeQuotaUsed) {
            $res['size_quota_used'] = $this->sizeQuotaUsed;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->storeRedundancyType) {
            $res['store_redundancy_type'] = $this->storeRedundancyType;
        }

        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        if (null !== $this->usedSize) {
            $res['used_size'] = $this->usedSize;
        }

        if (null !== $this->userCountQuota) {
            $res['user_count_quota'] = $this->userCountQuota;
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
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['data_hash_name'])) {
            $model->dataHashName = $map['data_hash_name'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }

        if (isset($map['domain_name'])) {
            $model->domainName = $map['domain_name'];
        }

        if (isset($map['init_drive_enable'])) {
            $model->initDriveEnable = $map['init_drive_enable'];
        }

        if (isset($map['init_drive_size'])) {
            $model->initDriveSize = $map['init_drive_size'];
        }

        if (isset($map['parent_domain_id'])) {
            $model->parentDomainId = $map['parent_domain_id'];
        }

        if (isset($map['published_app_access_strategy'])) {
            $model->publishedAppAccessStrategy = AppAccessStrategy::fromMap($map['published_app_access_strategy']);
        }

        if (isset($map['sharable'])) {
            $model->sharable = $map['sharable'];
        }

        if (isset($map['size_quota'])) {
            $model->sizeQuota = $map['size_quota'];
        }

        if (isset($map['size_quota_used'])) {
            $model->sizeQuotaUsed = $map['size_quota_used'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['store_redundancy_type'])) {
            $model->storeRedundancyType = $map['store_redundancy_type'];
        }

        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        if (isset($map['used_size'])) {
            $model->usedSize = $map['used_size'];
        }

        if (isset($map['user_count_quota'])) {
            $model->userCountQuota = $map['user_count_quota'];
        }

        return $model;
    }
}
