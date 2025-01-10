<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateErRouteMapRequest extends Model
{
    /**
     * @description Policy description
     *
     * @example terraform-example
     *
     * @var string
     */
    public $description;

    /**
     * @description Destination CIDR Block
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Lingjun HUB ID
     *
     * This parameter is required.
     * @example er-aueyxxsy
     *
     * @var string
     */
    public $erId;

    /**
     * @description The ID of the destination instance.
     *
     * This parameter is required.
     * @example vpd-xlhsvdvt
     *
     * @var string
     */
    public $receptionInstanceId;

    /**
     * @description The tenant to which the route receiving instance belongs.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $receptionInstanceOwner;

    /**
     * @description The type of the destination instance. Valid values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
     * This parameter is required.
     * @example VPD
     *
     * @var string
     */
    public $receptionInstanceType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Policy behavior; optional values:
     *
     *   **permit**: Allow
     *   **deny**: Rejected
     *
     * This parameter is required.
     * @example permit
     *
     * @var string
     */
    public $routeMapAction;

    /**
     * @description The ID of the policy.
     *
     * A smaller sequence number indicates a lower priority. When a route is matched, a policy with a higher priority is preferentially matched.
     *
     **Valid values: 1001 to 2000**
     *
     * This parameter is required.
     * @example 1001
     *
     * @var int
     */
    public $routeMapNum;

    /**
     * @description The ID of the source instance.
     *
     * This parameter is required.
     * @example vpd-xlsjsdvt
     *
     * @var string
     */
    public $transmissionInstanceId;

    /**
     * @description The tenant to which the route publish instance belongs
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $transmissionInstanceOwner;

    /**
     * @description The type of the source instance. Valid values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
     * This parameter is required.
     * @example VPD
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateErRouteMapRequest
     */
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
