<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class CheckUuidValidRequest extends Model
{
    /**
     * @var string
     */
    public $bluetooth;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chipId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $etherMac;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serialNo;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wlan;
    protected $_name = [
        'bluetooth' => 'Bluetooth',
        'buildId'   => 'BuildId',
        'chipId'    => 'ChipId',
        'clientId'  => 'ClientId',
        'customId'  => 'CustomId',
        'etherMac'  => 'EtherMac',
        'serialNo'  => 'SerialNo',
        'uuid'      => 'Uuid',
        'wlan'      => 'Wlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bluetooth) {
            $res['Bluetooth'] = $this->bluetooth;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->chipId) {
            $res['ChipId'] = $this->chipId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->etherMac) {
            $res['EtherMac'] = $this->etherMac;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->wlan) {
            $res['Wlan'] = $this->wlan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckUuidValidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bluetooth'])) {
            $model->bluetooth = $map['Bluetooth'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ChipId'])) {
            $model->chipId = $map['ChipId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['EtherMac'])) {
            $model->etherMac = $map['EtherMac'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Wlan'])) {
            $model->wlan = $map['Wlan'];
        }

        return $model;
    }
}
