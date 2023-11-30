<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @description The description of the domain.
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain ID.
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The name of the domain.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to enable the default drive feature. A value of true specifies that all users are assigned a drive by default on the first logon. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $initDriveEnable;

    /**
     * @description The size of the default drive. Unit: bytes. You must specify init_drive_size if you set init_drive_enable to true. Default value: 0. A value of 0 specifies that the size of the default drive is 0 bytes and you cannot upload files to the drive. To initialize the default drive, set init_drive_size to 0. A value of -1 specifies that the size is unlimited.
     *
     * @example 1073741824
     *
     * @var int
     */
    public $initDriveSize;

    /**
     * @description The access policy of the application.
     *
     * @var AppAccessStrategy
     */
    public $publishedAppAccessStrategy;

    /**
     * @description The total storage quota for all drives in the domain. A value of 0 specifies that the quota is unlimited.
     *
     * @example 1099511627776
     *
     * @var int
     */
    public $sizeQuota;

    /**
     * @description The maximum number of users that can be created in the domain.
     *
     * @example 50
     *
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'description'                => 'description',
        'domainId'                   => 'domain_id',
        'domainName'                 => 'domain_name',
        'initDriveEnable'            => 'init_drive_enable',
        'initDriveSize'              => 'init_drive_size',
        'publishedAppAccessStrategy' => 'published_app_access_strategy',
        'sizeQuota'                  => 'size_quota',
        'userCountQuota'             => 'user_count_quota',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['published_app_access_strategy'] = null !== $this->publishedAppAccessStrategy ? $this->publishedAppAccessStrategy->toMap() : null;
        }
        if (null !== $this->sizeQuota) {
            $res['size_quota'] = $this->sizeQuota;
        }
        if (null !== $this->userCountQuota) {
            $res['user_count_quota'] = $this->userCountQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRequest
     */
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
