<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result\devices\multiKeySwitchExt;

use AlibabaCloud\Dara\Model;

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
        'aliasList' => 'AliasList',
        'category' => 'Category',
        'deviceIndex' => 'DeviceIndex',
        'deviceName' => 'DeviceName',
        'deviceStatus' => 'DeviceStatus',
        'elementCode' => 'ElementCode',
        'location' => 'Location',
    ];

    public function validate()
    {
        if (\is_array($this->aliasList)) {
            Model::validateArray($this->aliasList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasList) {
            if (\is_array($this->aliasList)) {
                $res['AliasList'] = [];
                $n1 = 0;
                foreach ($this->aliasList as $item1) {
                    $res['AliasList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasList'])) {
            if (!empty($map['AliasList'])) {
                $model->aliasList = [];
                $n1 = 0;
                foreach ($map['AliasList'] as $item1) {
                    $model->aliasList[$n1] = $item1;
                    ++$n1;
                }
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
