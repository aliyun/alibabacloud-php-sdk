<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetServerlessAppAuthDetailRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appRegionId;
    /**
     * @var string
     */
    public $machineType;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'appId'       => 'AppId',
        'appRegionId' => 'AppRegionId',
        'machineType' => 'MachineType',
        'vendorType'  => 'VendorType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appRegionId) {
            $res['AppRegionId'] = $this->appRegionId;
        }

        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }

        if (null !== $this->vendorType) {
            $res['VendorType'] = $this->vendorType;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppRegionId'])) {
            $model->appRegionId = $map['AppRegionId'];
        }

        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }

        if (isset($map['VendorType'])) {
            $model->vendorType = $map['VendorType'];
        }

        return $model;
    }
}
