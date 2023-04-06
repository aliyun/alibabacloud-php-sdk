<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description domain id
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @example true
     *
     * @var bool
     */
    public $initDriveEnable;

    /**
     * @example 1073741824
     *
     * @var int
     */
    public $initDriveSize;

    /**
     * @example 1099511627776
     *
     * @var int
     */
    public $sizeQuota;

    /**
     * @example 50
     *
     * @var int
     */
    public $userCountQuota;
    protected $_name = [
        'description'     => 'description',
        'domainId'        => 'domain_id',
        'domainName'      => 'domain_name',
        'initDriveEnable' => 'init_drive_enable',
        'initDriveSize'   => 'init_drive_size',
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
        if (isset($map['size_quota'])) {
            $model->sizeQuota = $map['size_quota'];
        }
        if (isset($map['user_count_quota'])) {
            $model->userCountQuota = $map['user_count_quota'];
        }

        return $model;
    }
}
