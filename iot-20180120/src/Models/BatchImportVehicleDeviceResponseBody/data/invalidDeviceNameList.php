<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceNameList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceNameList;
    protected $_name = [
        'invalidDeviceNameList' => 'InvalidDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = $this->invalidDeviceNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = $map['InvalidDeviceNameList'];
            }
        }

        return $model;
    }
}
