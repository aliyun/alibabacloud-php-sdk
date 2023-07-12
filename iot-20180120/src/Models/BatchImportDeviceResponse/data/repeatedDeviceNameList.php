<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class repeatedDeviceNameList extends Model
{
    /**
     * @description repeatedDeviceName
     *
     * @var string[]
     */
    public $repeatedDeviceName;
    protected $_name = [
        'repeatedDeviceName' => 'repeatedDeviceName',
    ];

    public function validate()
    {
        Model::validateRequired('repeatedDeviceName', $this->repeatedDeviceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repeatedDeviceName) {
            $res['repeatedDeviceName'] = $this->repeatedDeviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repeatedDeviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['repeatedDeviceName'])) {
            if (!empty($map['repeatedDeviceName'])) {
                $model->repeatedDeviceName = $map['repeatedDeviceName'];
            }
        }

        return $model;
    }
}
