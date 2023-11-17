<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingDeviceByAccountResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var int
     */
    public $bindTime;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $owned;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'bindTime'   => 'BindTime',
        'deviceName' => 'DeviceName',
        'iotId'      => 'IotId',
        'nodeType'   => 'NodeType',
        'owned'      => 'Owned',
        'productKey' => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->owned) {
            $res['Owned'] = $this->owned;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Owned'])) {
            $model->owned = $map['Owned'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
