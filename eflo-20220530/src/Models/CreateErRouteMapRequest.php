<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class CreateErRouteMapRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var string
     */
    public $erId;
    /**
     * @var string
     */
    public $receptionInstanceId;
    /**
     * @var string
     */
    public $receptionInstanceOwner;
    /**
     * @var string
     */
    public $receptionInstanceType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $routeMapAction;
    /**
     * @var int
     */
    public $routeMapNum;
    /**
     * @var string
     */
    public $transmissionInstanceId;
    /**
     * @var string
     */
    public $transmissionInstanceOwner;
    /**
     * @var string
     */
    public $transmissionInstanceType;
    protected $_name = [
        'description'               => 'Description',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'erId'                      => 'ErId',
        'receptionInstanceId'       => 'ReceptionInstanceId',
        'receptionInstanceOwner'    => 'ReceptionInstanceOwner',
        'receptionInstanceType'     => 'ReceptionInstanceType',
        'regionId'                  => 'RegionId',
        'routeMapAction'            => 'RouteMapAction',
        'routeMapNum'               => 'RouteMapNum',
        'transmissionInstanceId'    => 'TransmissionInstanceId',
        'transmissionInstanceOwner' => 'TransmissionInstanceOwner',
        'transmissionInstanceType'  => 'TransmissionInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }

        if (null !== $this->receptionInstanceId) {
            $res['ReceptionInstanceId'] = $this->receptionInstanceId;
        }

        if (null !== $this->receptionInstanceOwner) {
            $res['ReceptionInstanceOwner'] = $this->receptionInstanceOwner;
        }

        if (null !== $this->receptionInstanceType) {
            $res['ReceptionInstanceType'] = $this->receptionInstanceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->routeMapAction) {
            $res['RouteMapAction'] = $this->routeMapAction;
        }

        if (null !== $this->routeMapNum) {
            $res['RouteMapNum'] = $this->routeMapNum;
        }

        if (null !== $this->transmissionInstanceId) {
            $res['TransmissionInstanceId'] = $this->transmissionInstanceId;
        }

        if (null !== $this->transmissionInstanceOwner) {
            $res['TransmissionInstanceOwner'] = $this->transmissionInstanceOwner;
        }

        if (null !== $this->transmissionInstanceType) {
            $res['TransmissionInstanceType'] = $this->transmissionInstanceType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }

        if (isset($map['ReceptionInstanceId'])) {
            $model->receptionInstanceId = $map['ReceptionInstanceId'];
        }

        if (isset($map['ReceptionInstanceOwner'])) {
            $model->receptionInstanceOwner = $map['ReceptionInstanceOwner'];
        }

        if (isset($map['ReceptionInstanceType'])) {
            $model->receptionInstanceType = $map['ReceptionInstanceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RouteMapAction'])) {
            $model->routeMapAction = $map['RouteMapAction'];
        }

        if (isset($map['RouteMapNum'])) {
            $model->routeMapNum = $map['RouteMapNum'];
        }

        if (isset($map['TransmissionInstanceId'])) {
            $model->transmissionInstanceId = $map['TransmissionInstanceId'];
        }

        if (isset($map['TransmissionInstanceOwner'])) {
            $model->transmissionInstanceOwner = $map['TransmissionInstanceOwner'];
        }

        if (isset($map['TransmissionInstanceType'])) {
            $model->transmissionInstanceType = $map['TransmissionInstanceType'];
        }

        return $model;
    }
}
