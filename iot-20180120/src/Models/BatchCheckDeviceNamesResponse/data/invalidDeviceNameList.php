<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceNameList extends Model
{
    /**
     * @description InvalidDeviceName
     *
     * @var string[]
     */
    public $invalidDeviceName;
    protected $_name = [
        'invalidDeviceName' => 'InvalidDeviceName',
    ];

    public function validate()
    {
        Model::validateRequired('invalidDeviceName', $this->invalidDeviceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceName) {
            $res['InvalidDeviceName'] = $this->invalidDeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDeviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidDeviceName'])) {
            if (!empty($map['InvalidDeviceName'])) {
                $model->invalidDeviceName = $map['InvalidDeviceName'];
            }
        }

        return $model;
    }
}
