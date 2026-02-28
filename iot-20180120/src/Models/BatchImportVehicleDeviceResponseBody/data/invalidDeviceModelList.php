<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->invalidDeviceModelList)) {
            Model::validateArray($this->invalidDeviceModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceModelList) {
            if (\is_array($this->invalidDeviceModelList)) {
                $res['invalidDeviceModelList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceModelList as $item1) {
                    $res['invalidDeviceModelList'][$n1] = $item1;
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
        if (isset($map['invalidDeviceModelList'])) {
            if (!empty($map['invalidDeviceModelList'])) {
                $model->invalidDeviceModelList = [];
                $n1 = 0;
                foreach ($map['invalidDeviceModelList'] as $item1) {
                    $model->invalidDeviceModelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
