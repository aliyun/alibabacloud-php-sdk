<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result\devices\multiKeySwitchExt;

use AlibabaCloud\Tea\Model;

class switchList extends Model
{
    /**
     * @var string[]
     */
    public $aliasList;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $deviceIndex;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $elementCode;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'aliasList'    => 'AliasList',
        'category'     => 'Category',
        'deviceIndex'  => 'DeviceIndex',
        'deviceName'   => 'DeviceName',
        'deviceStatus' => 'DeviceStatus',
        'elementCode'  => 'ElementCode',
        'location'     => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasList) {
            $res['AliasList'] = $this->aliasList;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deviceIndex) {
            $res['DeviceIndex'] = $this->deviceIndex;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }
        if (null !== $this->elementCode) {
            $res['ElementCode'] = $this->elementCode;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasList'])) {
            if (!empty($map['AliasList'])) {
                $model->aliasList = $map['AliasList'];
            }
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeviceIndex'])) {
            $model->deviceIndex = $map['DeviceIndex'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }
        if (isset($map['ElementCode'])) {
            $model->elementCode = $map['ElementCode'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
