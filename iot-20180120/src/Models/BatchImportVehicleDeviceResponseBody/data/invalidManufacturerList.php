<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidManufacturerList extends Model
{
    /**
     * @var string[]
     */
    public $invalidManufacturerList;
    protected $_name = [
        'invalidManufacturerList' => 'invalidManufacturerList',
    ];

    public function validate()
    {
        if (\is_array($this->invalidManufacturerList)) {
            Model::validateArray($this->invalidManufacturerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidManufacturerList) {
            if (\is_array($this->invalidManufacturerList)) {
                $res['invalidManufacturerList'] = [];
                $n1 = 0;
                foreach ($this->invalidManufacturerList as $item1) {
                    $res['invalidManufacturerList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['invalidManufacturerList'])) {
            if (!empty($map['invalidManufacturerList'])) {
                $model->invalidManufacturerList = [];
                $n1 = 0;
                foreach ($map['invalidManufacturerList'] as $item1) {
                    $model->invalidManufacturerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
