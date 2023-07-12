<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class invalidManufacturerList extends Model
{
    /**
     * @description invalidManufacturerList
     *
     * @var string[]
     */
    public $invalidManufacturerList;
    protected $_name = [
        'invalidManufacturerList' => 'invalidManufacturerList',
    ];

    public function validate()
    {
        Model::validateRequired('invalidManufacturerList', $this->invalidManufacturerList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidManufacturerList) {
            $res['invalidManufacturerList'] = $this->invalidManufacturerList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidManufacturerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidManufacturerList'])) {
            if (!empty($map['invalidManufacturerList'])) {
                $model->invalidManufacturerList = $map['invalidManufacturerList'];
            }
        }

        return $model;
    }
}
