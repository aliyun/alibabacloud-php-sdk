<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListErRouteMapsRequest extends Model
{
    /**
     * @description Destination CIDR Block
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Specifies whether to enable paged query.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Elastic Router ID
     *
     * This parameter is required.
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description routing policy ID
     *
     * @example er-rmap-uwglhzom
     *
     * @var string
     */
    public $erRouteMapId;

    /**
     * @description Policy number (default for automatic creation is 3000; The value range of the policy number manually created by the user is 1001-2000)
     *
     * @example 1001
     *
     * @var int
     */
    public $erRouteMapNum;

    /**
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Receive Instance ID
     *
     * @example vpd-x2lohgpv
     *
     * @var string
     */
    public $receptionInstanceId;

    /**
     * @description Receive Instance Name
     *
     * @example vpd2
     *
     * @var string
     */
    public $receptionInstanceName;

    /**
     * @description The type of the received instance. Optional values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
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
     * @description Resource group instance ID
     *
     * @example rg-acfmzaq3ypaqkdy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Policy behavior; optional values:
     *
     *   **permit**: Allow
     *   **deny**: Rejected
     *
     * @example deny
     *
     * @var string
     */
    public $routeMapAction;

    /**
     * @description Release Instance ID
     *
     * @example vpd-xsdlg2xb
     *
     * @var string
     */
    public $transmissionInstanceId;

    /**
     * @description Release Instance Name
     *
     * @example vpd1
     *
     * @var string
     */
    public $transmissionInstanceName;

    /**
     * @description The type of the published instance. Optional values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
     * @example VPD
     *
     * @var string
     */
    public $transmissionInstanceType;
    protected $_name = [
        'destinationCidrBlock'     => 'DestinationCidrBlock',
        'enablePage'               => 'EnablePage',
        'erId'                     => 'ErId',
        'erRouteMapId'             => 'ErRouteMapId',
        'erRouteMapNum'            => 'ErRouteMapNum',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'receptionInstanceId'      => 'ReceptionInstanceId',
        'receptionInstanceName'    => 'ReceptionInstanceName',
        'receptionInstanceType'    => 'ReceptionInstanceType',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'routeMapAction'           => 'RouteMapAction',
        'transmissionInstanceId'   => 'TransmissionInstanceId',
        'transmissionInstanceName' => 'TransmissionInstanceName',
        'transmissionInstanceType' => 'TransmissionInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erRouteMapId) {
            $res['ErRouteMapId'] = $this->erRouteMapId;
        }
        if (null !== $this->erRouteMapNum) {
            $res['ErRouteMapNum'] = $this->erRouteMapNum;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->receptionInstanceId) {
            $res['ReceptionInstanceId'] = $this->receptionInstanceId;
        }
        if (null !== $this->receptionInstanceName) {
            $res['ReceptionInstanceName'] = $this->receptionInstanceName;
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
        if (null !== $this->routeMapAction) {
            $res['RouteMapAction'] = $this->routeMapAction;
        }
        if (null !== $this->transmissionInstanceId) {
            $res['TransmissionInstanceId'] = $this->transmissionInstanceId;
        }
        if (null !== $this->transmissionInstanceName) {
            $res['TransmissionInstanceName'] = $this->transmissionInstanceName;
        }
        if (null !== $this->transmissionInstanceType) {
            $res['TransmissionInstanceType'] = $this->transmissionInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListErRouteMapsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteMapId'])) {
            $model->erRouteMapId = $map['ErRouteMapId'];
        }
        if (isset($map['ErRouteMapNum'])) {
            $model->erRouteMapNum = $map['ErRouteMapNum'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReceptionInstanceId'])) {
            $model->receptionInstanceId = $map['ReceptionInstanceId'];
        }
        if (isset($map['ReceptionInstanceName'])) {
            $model->receptionInstanceName = $map['ReceptionInstanceName'];
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
        if (isset($map['RouteMapAction'])) {
            $model->routeMapAction = $map['RouteMapAction'];
        }
        if (isset($map['TransmissionInstanceId'])) {
            $model->transmissionInstanceId = $map['TransmissionInstanceId'];
        }
        if (isset($map['TransmissionInstanceName'])) {
            $model->transmissionInstanceName = $map['TransmissionInstanceName'];
        }
        if (isset($map['TransmissionInstanceType'])) {
            $model->transmissionInstanceType = $map['TransmissionInstanceType'];
        }

        return $model;
    }
}
