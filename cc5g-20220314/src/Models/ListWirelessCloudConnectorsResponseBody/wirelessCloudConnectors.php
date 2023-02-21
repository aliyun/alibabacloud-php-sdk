<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorsResponseBody;

use AlibabaCloud\Tea\Model;

class wirelessCloudConnectors extends Model
{
    /**
     * @example Business
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 20000
     *
     * @var string
     */
    public $cardCount;

    /**
     * @example 2022-3-15 22:20:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example dp-xxxx
     *
     * @var string
     */
    public $dataPackageId;

    /**
     * @example 200
     *
     * @var string
     */
    public $dataPackageType;

    /**
     * @example cc5g-test
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example CC5G
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $useCase;

    /**
     * @example cc5gg-****
     *
     * @var string
     */
    public $wirelessCloudConnectorGroupId;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'businessType'                  => 'BusinessType',
        'cardCount'                     => 'CardCount',
        'createTime'                    => 'CreateTime',
        'dataPackageId'                 => 'DataPackageId',
        'dataPackageType'               => 'DataPackageType',
        'description'                   => 'Description',
        'name'                          => 'Name',
        'regionId'                      => 'RegionId',
        'serviceType'                   => 'ServiceType',
        'status'                        => 'Status',
        'useCase'                       => 'UseCase',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
        'wirelessCloudConnectorId'      => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cardCount) {
            $res['CardCount'] = $this->cardCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->dataPackageType) {
            $res['DataPackageType'] = $this->dataPackageType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->useCase) {
            $res['UseCase'] = $this->useCase;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wirelessCloudConnectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CardCount'])) {
            $model->cardCount = $map['CardCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['DataPackageType'])) {
            $model->dataPackageType = $map['DataPackageType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UseCase'])) {
            $model->useCase = $map['UseCase'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
