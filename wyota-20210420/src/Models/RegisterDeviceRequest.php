<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
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
     * @var string
     */
    public $chipId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $etherMac;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $wlan;
    protected $_name = [
        'bluetooth'  => 'Bluetooth',
        'buildId'    => 'BuildId',
        'chipId'     => 'ChipId',
        'clientId'   => 'ClientId',
        'clientType' => 'ClientType',
        'cpu'        => 'Cpu',
        'customId'   => 'CustomId',
        'etherMac'   => 'EtherMac',
        'memory'     => 'Memory',
        'model'      => 'Model',
        'serialNo'   => 'SerialNo',
        'storage'    => 'Storage',
        'token'      => 'Token',
        'wlan'       => 'Wlan',
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
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->etherMac) {
            $res['EtherMac'] = $this->etherMac;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->wlan) {
            $res['Wlan'] = $this->wlan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceRequest
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
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['EtherMac'])) {
            $model->etherMac = $map['EtherMac'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Wlan'])) {
            $model->wlan = $map['Wlan'];
        }

        return $model;
    }
}
