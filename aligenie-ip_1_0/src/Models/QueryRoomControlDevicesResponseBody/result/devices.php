<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesResponseBody\result\devices\multiKeySwitchExt;

class devices extends Model
{
    /**
     * @var string[]
     */
    public $aliasList;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $DN;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var multiKeySwitchExt
     */
    public $multiKeySwitchExt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $PK;
    protected $_name = [
        'aliasList' => 'AliasList',
        'connectType' => 'ConnectType',
        'DN' => 'DN',
        'deviceName' => 'DeviceName',
        'deviceStatus' => 'DeviceStatus',
        'multiKeySwitchExt' => 'MultiKeySwitchExt',
        'name' => 'Name',
        'number' => 'Number',
        'PK' => 'PK',
    ];

    public function validate()
    {
        if (\is_array($this->aliasList)) {
            Model::validateArray($this->aliasList);
        }
        if (null !== $this->multiKeySwitchExt) {
            $this->multiKeySwitchExt->validate();
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

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->DN) {
            $res['DN'] = $this->DN;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->multiKeySwitchExt) {
            $res['MultiKeySwitchExt'] = null !== $this->multiKeySwitchExt ? $this->multiKeySwitchExt->toArray($noStream) : $this->multiKeySwitchExt;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
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

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['DN'])) {
            $model->DN = $map['DN'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['MultiKeySwitchExt'])) {
            $model->multiKeySwitchExt = multiKeySwitchExt::fromMap($map['MultiKeySwitchExt']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        return $model;
    }
}
