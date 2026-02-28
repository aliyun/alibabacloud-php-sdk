<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->repeatedDeviceNameList)) {
            Model::validateArray($this->repeatedDeviceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repeatedDeviceNameList) {
            if (\is_array($this->repeatedDeviceNameList)) {
                $res['RepeatedDeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->repeatedDeviceNameList as $item1) {
                    $res['RepeatedDeviceNameList'][$n1] = $item1;
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
        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = [];
                $n1 = 0;
                foreach ($map['RepeatedDeviceNameList'] as $item1) {
                    $model->repeatedDeviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
