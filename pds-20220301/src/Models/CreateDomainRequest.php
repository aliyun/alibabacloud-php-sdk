<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description The description of the domain.
     *
     * @example domain for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the domain.
     *
     * This parameter is required.
     * @example test_domain
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
     * @description The ID of the parent domain. If you want to create a child domain, specify parent_domain_id. In most cases, you do not need to create a child domain. If you want to perform secondary operations based on Drive and Photo Service, contact the customer service.
     *
     * @example bj1
     *
     * @var string
     */
    public $parentDomainId;

    /**
     * @description The total storage quota for all drives in the domain. A value of 0 specifies that the quota is unlimited.
     *
     * @example 1099511627776
     *
     * @var int
     */
    public $sizeQuota;

    /**
     * @description The largest number of users that can be created in the domain. A value of 0 specifies that the number is unlimited.
     *
     * @example 50
     *
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'description'     => 'description',
        'domainName'      => 'domain_name',
        'initDriveEnable' => 'init_drive_enable',
        'initDriveSize'   => 'init_drive_size',
        'parentDomainId'  => 'parent_domain_id',
        'sizeQuota'       => 'size_quota',
        'userCountQuota'  => 'user_count_quota',
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

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
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
