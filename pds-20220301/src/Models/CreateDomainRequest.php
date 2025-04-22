<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CreateDomainRequest extends Model
{
    /**
     * @var string
     */
    public $description;

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
     * @var int
     */
    public $sizeQuota;

    /**
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'description' => 'description',
        'domainName' => 'domain_name',
        'initDriveEnable' => 'init_drive_enable',
        'initDriveSize' => 'init_drive_size',
        'parentDomainId' => 'parent_domain_id',
        'sizeQuota' => 'size_quota',
        'userCountQuota' => 'user_count_quota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (isset($map['size_quota'])) {
            $model->sizeQuota = $map['size_quota'];
        }

        if (isset($map['user_count_quota'])) {
            $model->userCountQuota = $map['user_count_quota'];
        }

        return $model;
    }
}
