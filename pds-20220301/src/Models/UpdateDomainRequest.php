<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UpdateDomainRequest extends Model
{
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
     * @var AppAccessStrategy
     */
    public $publishedAppAccessStrategy;

    /**
     * @var int
     */
    public $sizeQuota;

    /**
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'description' => 'description',
        'domainId' => 'domain_id',
        'domainName' => 'domain_name',
        'initDriveEnable' => 'init_drive_enable',
        'initDriveSize' => 'init_drive_size',
        'publishedAppAccessStrategy' => 'published_app_access_strategy',
        'sizeQuota' => 'size_quota',
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

        if (null !== $this->publishedAppAccessStrategy) {
            $res['published_app_access_strategy'] = null !== $this->publishedAppAccessStrategy ? $this->publishedAppAccessStrategy->toArray($noStream) : $this->publishedAppAccessStrategy;
        }

        if (null !== $this->sizeQuota) {
            $res['size_quota'] = $this->sizeQuota;
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

        if (isset($map['published_app_access_strategy'])) {
            $model->publishedAppAccessStrategy = AppAccessStrategy::fromMap($map['published_app_access_strategy']);
        }

        if (isset($map['size_quota'])) {
            $model->sizeQuota = $map['size_quota'];
        }

        if (isset($map['user_count_quota'])) {
            $model->userCountQuota = $map['user_count_quota'];
        }

        return $model;
    }
}
