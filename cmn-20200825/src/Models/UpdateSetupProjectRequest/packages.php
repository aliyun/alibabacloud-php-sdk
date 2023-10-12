<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateSetupProjectRequest;

use AlibabaCloud\Tea\Model;

class packages extends Model
{
    /**
     * @description 设备号
     *
     * @example 1
     *
     * @var int
     */
    public $deviceNumber;

    /**
     * @description 型号
     *
     * @example 6510
     *
     * @var string
     */
    public $model;

    /**
     * @description 角色
     *
     * @example DSW
     *
     * @var string
     */
    public $role;

    /**
     * @description 厂商
     *
     * @example Ruijie
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceNumber' => 'DeviceNumber',
        'model'        => 'Model',
        'role'         => 'Role',
        'vendor'       => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
