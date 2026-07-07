<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefreshAuthTokensRequest extends Model
{
    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $licenseKeys;
    protected $_name = [
        'expireSeconds' => 'ExpireSeconds',
        'instanceIds' => 'InstanceIds',
        'licenseKeys' => 'LicenseKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->licenseKeys) {
            $res['LicenseKeys'] = $this->licenseKeys;
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
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['LicenseKeys'])) {
            $model->licenseKeys = $map['LicenseKeys'];
        }

        return $model;
    }
}
