<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class ListErRouteMapsRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var bool
     */
    public $enablePage;

    /**
     * @var string
     */
    public $erId;

    /**
     * @var string
     */
    public $erRouteMapId;

    /**
     * @var int
     */
    public $erRouteMapNum;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $receptionInstanceId;

    /**
     * @var string
     */
    public $receptionInstanceName;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routeMapAction;

    /**
     * @var string
     */
    public $transmissionInstanceId;

    /**
     * @var string
     */
    public $transmissionInstanceName;

    /**
     * @var string
     */
    public $transmissionInstanceType;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'enablePage' => 'EnablePage',
        'erId' => 'ErId',
        'erRouteMapId' => 'ErRouteMapId',
        'erRouteMapNum' => 'ErRouteMapNum',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'receptionInstanceId' => 'ReceptionInstanceId',
        'receptionInstanceName' => 'ReceptionInstanceName',
        'receptionInstanceType' => 'ReceptionInstanceType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeMapAction' => 'RouteMapAction',
        'transmissionInstanceId' => 'TransmissionInstanceId',
        'transmissionInstanceName' => 'TransmissionInstanceName',
        'transmissionInstanceType' => 'TransmissionInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
