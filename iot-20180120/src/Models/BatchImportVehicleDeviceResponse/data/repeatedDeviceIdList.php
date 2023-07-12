<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportVehicleDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class repeatedDeviceIdList extends Model
{
    /**
     * @description repeatedDeviceIdList
     *
     * @var string[]
     */
    public $repeatedDeviceIdList;
    protected $_name = [
        'repeatedDeviceIdList' => 'repeatedDeviceIdList',
    ];

    public function validate()
    {
        Model::validateRequired('repeatedDeviceIdList', $this->repeatedDeviceIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repeatedDeviceIdList) {
            $res['repeatedDeviceIdList'] = $this->repeatedDeviceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repeatedDeviceIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['repeatedDeviceIdList'])) {
            if (!empty($map['repeatedDeviceIdList'])) {
                $model->repeatedDeviceIdList = $map['repeatedDeviceIdList'];
            }
        }

        return $model;
    }
}
