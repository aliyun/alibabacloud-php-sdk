<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class GetLakebaseTenantTokenRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var string
     */
    public $subdir;

    /**
     * @var string
     */
    public $tenant;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'subdir' => 'Subdir',
        'tenant' => 'Tenant',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->subdir) {
            $res['Subdir'] = $this->subdir;
        }

        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['Subdir'])) {
            $model->subdir = $map['Subdir'];
        }

        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }

        return $model;
    }
}
