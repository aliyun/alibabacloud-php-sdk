<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class RegisterLocationRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $inventoryCollectEnabled;

    /**
     * @description This parameter is required.
     *
     * @example oss://mybucket/
     *
     * @var string
     */
    public $location;

    /**
     * @example true
     *
     * @var bool
     */
    public $ossLogCollectEnabled;

    /**
     * @description This parameter is required.
     *
     * @example AliyunDLFWorkFlowDefaultRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'inventoryCollectEnabled' => 'InventoryCollectEnabled',
        'location'                => 'Location',
        'ossLogCollectEnabled'    => 'OssLogCollectEnabled',
        'roleName'                => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryCollectEnabled) {
            $res['InventoryCollectEnabled'] = $this->inventoryCollectEnabled;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->ossLogCollectEnabled) {
            $res['OssLogCollectEnabled'] = $this->ossLogCollectEnabled;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InventoryCollectEnabled'])) {
            $model->inventoryCollectEnabled = $map['InventoryCollectEnabled'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OssLogCollectEnabled'])) {
            $model->ossLogCollectEnabled = $map['OssLogCollectEnabled'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
