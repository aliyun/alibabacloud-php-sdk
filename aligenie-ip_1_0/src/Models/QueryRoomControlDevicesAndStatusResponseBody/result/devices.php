<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesAndStatusResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomControlDevicesAndStatusResponseBody\result\devices\multiKeySwitchExt;

class devices extends Model
{
    /**
     * @var string[]
     */
    public $aliasList;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $connectType;

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
    public $dn;

    /**
     * @var string
     */
    public $infraredId;

    /**
     * @var string
     */
    public $infraredIndex;

    /**
     * @var string
     */
    public $infraredVersion;

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
    public $pk;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $serviceProvider;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'aliasList' => 'AliasList',
        'brand' => 'Brand',
        'city' => 'City',
        'connectType' => 'ConnectType',
        'deviceName' => 'DeviceName',
        'deviceStatus' => 'DeviceStatus',
        'dn' => 'Dn',
        'infraredId' => 'InfraredId',
        'infraredIndex' => 'InfraredIndex',
        'infraredVersion' => 'InfraredVersion',
        'multiKeySwitchExt' => 'MultiKeySwitchExt',
        'name' => 'Name',
        'number' => 'Number',
        'pk' => 'Pk',
        'province' => 'Province',
        'serviceProvider' => 'ServiceProvider',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aliasList)) {
            Model::validateArray($this->aliasList);
        }
        if (null !== $this->multiKeySwitchExt) {
            $this->multiKeySwitchExt->validate();
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
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

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->dn) {
            $res['Dn'] = $this->dn;
        }

        if (null !== $this->infraredId) {
            $res['InfraredId'] = $this->infraredId;
        }

        if (null !== $this->infraredIndex) {
            $res['InfraredIndex'] = $this->infraredIndex;
        }

        if (null !== $this->infraredVersion) {
            $res['InfraredVersion'] = $this->infraredVersion;
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

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                foreach ($this->status as $key1 => $value1) {
                    $res['Status'][$key1] = $value1;
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

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['Dn'])) {
            $model->dn = $map['Dn'];
        }

        if (isset($map['InfraredId'])) {
            $model->infraredId = $map['InfraredId'];
        }

        if (isset($map['InfraredIndex'])) {
            $model->infraredIndex = $map['InfraredIndex'];
        }

        if (isset($map['InfraredVersion'])) {
            $model->infraredVersion = $map['InfraredVersion'];
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

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                foreach ($map['Status'] as $key1 => $value1) {
                    $model->status[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
