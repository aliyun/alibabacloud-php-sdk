<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetAddonResponseBody\addon\resourcesSpec;

use AlibabaCloud\Dara\Model;

class eipResource extends Model
{
    /**
     * @var bool
     */
    public $autoCreate;
    /**
     * @var string
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $eipAddress;
    /**
     * @var string
     */
    public $eipInstanceId;
    /**
     * @var string
     */
    public $instanceChargeType;
    /**
     * @var string
     */
    public $internetChargeType;
    protected $_name = [
        'autoCreate'         => 'AutoCreate',
        'bandwidth'          => 'Bandwidth',
        'eipAddress'         => 'EipAddress',
        'eipInstanceId'      => 'EipInstanceId',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreate) {
            $res['AutoCreate'] = $this->autoCreate;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }

        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
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
        if (isset($map['AutoCreate'])) {
            $model->autoCreate = $map['AutoCreate'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }

        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        return $model;
    }
}
