<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class VehicleMetaVerifyV2Request extends Model
{
    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vehicleNum;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $verifyMetaType;
    protected $_name = [
        'identifyNum' => 'IdentifyNum',
        'paramType' => 'ParamType',
        'userName' => 'UserName',
        'vehicleNum' => 'VehicleNum',
        'vehicleType' => 'VehicleType',
        'verifyMetaType' => 'VerifyMetaType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->vehicleNum) {
            $res['VehicleNum'] = $this->vehicleNum;
        }

        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }

        if (null !== $this->verifyMetaType) {
            $res['VerifyMetaType'] = $this->verifyMetaType;
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
        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VehicleNum'])) {
            $model->vehicleNum = $map['VehicleNum'];
        }

        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }

        if (isset($map['VerifyMetaType'])) {
            $model->verifyMetaType = $map['VerifyMetaType'];
        }

        return $model;
    }
}
