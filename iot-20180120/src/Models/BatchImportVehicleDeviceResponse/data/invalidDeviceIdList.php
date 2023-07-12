<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceIdList extends Model
{
    /**
     * @description invalidDeviceIdList
     *
     * @var string[]
     */
    public $invalidDeviceIdList;
    protected $_name = [
        'invalidDeviceIdList' => 'invalidDeviceIdList',
    ];

    public function validate()
    {
        Model::validateRequired('invalidDeviceIdList', $this->invalidDeviceIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceIdList) {
            $res['invalidDeviceIdList'] = $this->invalidDeviceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidDeviceIdList'])) {
            if (!empty($map['invalidDeviceIdList'])) {
                $model->invalidDeviceIdList = $map['invalidDeviceIdList'];
            }
        }

        return $model;
    }
}
