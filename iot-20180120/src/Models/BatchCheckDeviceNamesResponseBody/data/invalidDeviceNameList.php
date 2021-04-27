<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data;

use AlibabaCloud\Tea\Model;

class invalidDeviceNameList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceName;
    protected $_name = [
        'invalidDeviceName' => 'InvalidDeviceName',
    ];

    public function validate()
    {
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
