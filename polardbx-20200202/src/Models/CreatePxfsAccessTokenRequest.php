<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreatePxfsAccessTokenRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $ttlSeconds;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'identityName' => 'IdentityName',
        'label' => 'Label',
        'regionId' => 'RegionId',
        'tenantId' => 'TenantId',
        'ttlSeconds' => 'TtlSeconds',
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

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->ttlSeconds) {
            $res['TtlSeconds'] = $this->ttlSeconds;
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

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TtlSeconds'])) {
            $model->ttlSeconds = $map['TtlSeconds'];
        }

        return $model;
    }
}
