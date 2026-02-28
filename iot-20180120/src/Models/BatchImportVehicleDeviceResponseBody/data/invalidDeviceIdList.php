<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidDeviceIdList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceIdList;
    protected $_name = [
        'invalidDeviceIdList' => 'invalidDeviceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDeviceIdList)) {
            Model::validateArray($this->invalidDeviceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceIdList) {
            if (\is_array($this->invalidDeviceIdList)) {
                $res['invalidDeviceIdList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceIdList as $item1) {
                    $res['invalidDeviceIdList'][$n1] = $item1;
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
        if (isset($map['invalidDeviceIdList'])) {
            if (!empty($map['invalidDeviceIdList'])) {
                $model->invalidDeviceIdList = [];
                $n1 = 0;
                foreach ($map['invalidDeviceIdList'] as $item1) {
                    $model->invalidDeviceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
