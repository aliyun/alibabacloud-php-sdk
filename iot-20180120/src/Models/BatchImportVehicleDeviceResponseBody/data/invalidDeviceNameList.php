<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->invalidDeviceNameList)) {
            Model::validateArray($this->invalidDeviceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceNameList) {
            if (\is_array($this->invalidDeviceNameList)) {
                $res['InvalidDeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceNameList as $item1) {
                    $res['InvalidDeviceNameList'][$n1] = $item1;
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
        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceNameList'] as $item1) {
                    $model->invalidDeviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
