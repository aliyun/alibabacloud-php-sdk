<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content;

use AlibabaCloud\Tea\Model;

class erRouteMaps extends Model
{
    /**
     * @description Policy behavior
     *
     * Valid value:
     *
     *   deny: rejects the.
     *   permit: The allows.
     *
     * @example permit
     *
     * @var string
     */
    public $action;

    /**
     * @description The time when the data address was created.
     *
     * @example 1645766599809
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Policy description
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Destination CIDR Block
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Lingjun HUB ID
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description routing policy ID
     *
     * @example er-rmap-xkslnmsr
     *
     * @var string
     */
    public $erRouteMapId;

    /**
     * @description The name of the routing policy.
     *
     * @example route-map-name
     *
     * @var string
     */
    public $erRouteMapName;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1623899444000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the destination instance.
     *
     * @example vpd-sdkd2gkx
     *
     * @var string
     */
    public $receptionInstanceId;

    /**
     * @description The name of the destination instance.
     *
     * @example Reception-name
     *
     * @var string
     */
    public $receptionInstanceName;

    /**
     * @description The tenant to which the destination instance belongs.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $receptionInstanceOwner;

    /**
     * @description The type of the destination instance.
     *
     * @example VPD
     *
     * @var string
     */
    public $receptionInstanceType;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-acfmzaq3ypaqkdy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Policy sequence number (1001-2000)
     *
     * @example 1001
     *
     * @var int
     */
    public $routeMapNum;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example XXQGPROD-zh_CN
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the source instance.
     *
     * @example vpd-xmglsymg
     *
     * @var string
     */
    public $transmissionInstanceId;

    /**
     * @description Source instance name
     *
     * @example test-transmission
     *
     * @var string
     */
    public $transmissionInstanceName;

    /**
     * @description The tenant to which the source instance belongs.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $transmissionInstanceOwner;

    /**
     * @description The type of the source instance.
     *
     * @example VPD
     *
     * @var string
     */
    public $transmissionInstanceType;
    protected $_name = [
        'action'                    => 'Action',
        'createTime'                => 'CreateTime',
        'description'               => 'Description',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'erId'                      => 'ErId',
        'erRouteMapId'              => 'ErRouteMapId',
        'erRouteMapName'            => 'ErRouteMapName',
        'gmtModified'               => 'GmtModified',
        'message'                   => 'Message',
        'receptionInstanceId'       => 'ReceptionInstanceId',
        'receptionInstanceName'     => 'ReceptionInstanceName',
        'receptionInstanceOwner'    => 'ReceptionInstanceOwner',
        'receptionInstanceType'     => 'ReceptionInstanceType',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'routeMapNum'               => 'RouteMapNum',
        'status'                    => 'Status',
        'tenantId'                  => 'TenantId',
        'transmissionInstanceId'    => 'TransmissionInstanceId',
        'transmissionInstanceName'  => 'TransmissionInstanceName',
        'transmissionInstanceOwner' => 'TransmissionInstanceOwner',
        'transmissionInstanceType'  => 'TransmissionInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erRouteMapId) {
            $res['ErRouteMapId'] = $this->erRouteMapId;
        }
        if (null !== $this->erRouteMapName) {
            $res['ErRouteMapName'] = $this->erRouteMapName;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->receptionInstanceId) {
            $res['ReceptionInstanceId'] = $this->receptionInstanceId;
        }
        if (null !== $this->receptionInstanceName) {
            $res['ReceptionInstanceName'] = $this->receptionInstanceName;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeMapNum) {
            $res['RouteMapNum'] = $this->routeMapNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->transmissionInstanceId) {
            $res['TransmissionInstanceId'] = $this->transmissionInstanceId;
        }
        if (null !== $this->transmissionInstanceName) {
            $res['TransmissionInstanceName'] = $this->transmissionInstanceName;
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
     * @return erRouteMaps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteMapId'])) {
            $model->erRouteMapId = $map['ErRouteMapId'];
        }
        if (isset($map['ErRouteMapName'])) {
            $model->erRouteMapName = $map['ErRouteMapName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReceptionInstanceId'])) {
            $model->receptionInstanceId = $map['ReceptionInstanceId'];
        }
        if (isset($map['ReceptionInstanceName'])) {
            $model->receptionInstanceName = $map['ReceptionInstanceName'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteMapNum'])) {
            $model->routeMapNum = $map['RouteMapNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TransmissionInstanceId'])) {
            $model->transmissionInstanceId = $map['TransmissionInstanceId'];
        }
        if (isset($map['TransmissionInstanceName'])) {
            $model->transmissionInstanceName = $map['TransmissionInstanceName'];
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
