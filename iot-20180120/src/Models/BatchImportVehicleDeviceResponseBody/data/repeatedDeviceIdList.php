<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class repeatedDeviceIdList extends Model
{
    /**
     * @var string[]
     */
    public $repeatedDeviceIdList;
    protected $_name = [
        'repeatedDeviceIdList' => 'repeatedDeviceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->repeatedDeviceIdList)) {
            Model::validateArray($this->repeatedDeviceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repeatedDeviceIdList) {
            if (\is_array($this->repeatedDeviceIdList)) {
                $res['repeatedDeviceIdList'] = [];
                $n1 = 0;
                foreach ($this->repeatedDeviceIdList as $item1) {
                    $res['repeatedDeviceIdList'][$n1] = $item1;
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
        if (isset($map['repeatedDeviceIdList'])) {
            if (!empty($map['repeatedDeviceIdList'])) {
                $model->repeatedDeviceIdList = [];
                $n1 = 0;
                foreach ($map['repeatedDeviceIdList'] as $item1) {
                    $model->repeatedDeviceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
