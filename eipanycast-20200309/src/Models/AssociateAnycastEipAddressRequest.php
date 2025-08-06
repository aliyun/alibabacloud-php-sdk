<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest\popLocations;

class AssociateAnycastEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string
     */
    public $associationMode;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @var string
     */
    public $bindInstanceType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var popLocations[]
     */
    public $popLocations;

    /**
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'anycastId' => 'AnycastId',
        'associationMode' => 'AssociationMode',
        'bindInstanceId' => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType' => 'BindInstanceType',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'popLocations' => 'PopLocations',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        if (\is_array($this->popLocations)) {
            Model::validateArray($this->popLocations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }

        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }

        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }

        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->popLocations) {
            if (\is_array($this->popLocations)) {
                $res['PopLocations'] = [];
                $n1 = 0;
                foreach ($this->popLocations as $item1) {
                    $res['PopLocations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }

        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }

        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }

        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['PopLocations'])) {
            if (!empty($map['PopLocations'])) {
                $model->popLocations = [];
                $n1 = 0;
                foreach ($map['PopLocations'] as $item1) {
                    $model->popLocations[$n1] = popLocations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
