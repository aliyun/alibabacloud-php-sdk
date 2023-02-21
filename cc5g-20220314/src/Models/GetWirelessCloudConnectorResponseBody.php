<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorResponseBody\netLinks;
use AlibabaCloud\Tea\Model;

class GetWirelessCloudConnectorResponseBody extends Model
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
     * @var string[]
     */
    public $features;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var netLinks[]
     */
    public $netLinks;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example CC5GCCIoT
     *
     * @var string
     */
    public $serviceType;

    /**
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
        'features'                      => 'Features',
        'name'                          => 'Name',
        'netLinks'                      => 'NetLinks',
        'regionId'                      => 'RegionId',
        'requestId'                     => 'RequestId',
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
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netLinks) {
            $res['NetLinks'] = [];
            if (null !== $this->netLinks && \is_array($this->netLinks)) {
                $n = 0;
                foreach ($this->netLinks as $item) {
                    $res['NetLinks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetWirelessCloudConnectorResponseBody
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetLinks'])) {
            if (!empty($map['NetLinks'])) {
                $model->netLinks = [];
                $n               = 0;
                foreach ($map['NetLinks'] as $item) {
                    $model->netLinks[$n++] = null !== $item ? netLinks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
