<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceModelList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceModelList;
    protected $_name = [
        'invalidDeviceModelList' => 'invalidDeviceModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceModelList) {
            $res['invalidDeviceModelList'] = $this->invalidDeviceModelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidDeviceModelList'])) {
            if (!empty($map['invalidDeviceModelList'])) {
                $model->invalidDeviceModelList = $map['invalidDeviceModelList'];
            }
        }

        return $model;
    }
}
