<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class UpdateSmartAccessGatewayBgpRouteRequest extends Model
{
    /**
     * @var bool
     */
    public $crossAccount;

    /**
     * @var int
     */
    public $holdTime;

    /**
     * @var int
     */
    public $keepAlive;

    /**
     * @var int
     */
    public $localAs;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $sagInsId;

    /**
     * @var string
     */
    public $sagSn;
    protected $_name = [
        'crossAccount' => 'CrossAccount',
        'holdTime' => 'HoldTime',
        'keepAlive' => 'KeepAlive',
        'localAs' => 'LocalAs',
        'regionId' => 'RegionId',
        'resourceUid' => 'ResourceUid',
        'routerId' => 'RouterId',
        'sagInsId' => 'SagInsId',
        'sagSn' => 'SagSn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccount) {
            $res['CrossAccount'] = $this->crossAccount;
        }

        if (null !== $this->holdTime) {
            $res['HoldTime'] = $this->holdTime;
        }

        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        if (null !== $this->localAs) {
            $res['LocalAs'] = $this->localAs;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }

        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        if (null !== $this->sagInsId) {
            $res['SagInsId'] = $this->sagInsId;
        }

        if (null !== $this->sagSn) {
            $res['SagSn'] = $this->sagSn;
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
        if (isset($map['CrossAccount'])) {
            $model->crossAccount = $map['CrossAccount'];
        }

        if (isset($map['HoldTime'])) {
            $model->holdTime = $map['HoldTime'];
        }

        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        if (isset($map['LocalAs'])) {
            $model->localAs = $map['LocalAs'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }

        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        if (isset($map['SagInsId'])) {
            $model->sagInsId = $map['SagInsId'];
        }

        if (isset($map['SagSn'])) {
            $model->sagSn = $map['SagSn'];
        }

        return $model;
    }
}
