<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceRecordLifeCycleRequest extends Model
{
    /**
     * @example ["C47T6xwp6ms4bNlkHRWCg4****", "d7XmBoJhAr88C6PelXDF00****"]
     *
     * @var string[]
     */
    public $deviceList;
    protected $_name = [
        'deviceList' => 'DeviceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceRecordLifeCycleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = $map['DeviceList'];
            }
        }

        return $model;
    }
}
