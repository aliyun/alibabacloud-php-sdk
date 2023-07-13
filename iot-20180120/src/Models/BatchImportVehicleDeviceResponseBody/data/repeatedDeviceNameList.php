<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class repeatedDeviceNameList extends Model
{
    /**
     * @var string[]
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = $this->repeatedDeviceNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repeatedDeviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = $map['RepeatedDeviceNameList'];
            }
        }

        return $model;
    }
}
