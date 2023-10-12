<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmStatusRequest extends Model
{
    /**
     * @example 聚合数据名称
     *
     * @var string
     */
    public $aggregateDataName;

    /**
     * @example 杭州市
     *
     * @var string
     */
    public $city;

    /**
     * @example 中国
     *
     * @var string
     */
    public $country;

    /**
     * @example space-isp_knbghjkl09u
     *
     * @var string
     */
    public $dedicatedLineId;

    /**
     * @example 专线名称
     *
     * @var string
     */
    public $dedicatedLineName;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceForm;

    /**
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example asw-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example cmn-cn-13edefd2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example H3C
     *
     * @var string
     */
    public $manufacturer;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 5800
     *
     * @var string
     */
    public $model;

    /**
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example space-123wefv243
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @example p-08uhbnlo9ygbn
     *
     * @var string
     */
    public $portCollectionId;

    /**
     * @example 端口集名称
     *
     * @var string
     */
    public $portCollectionName;

    /**
     * @example 浙江省
     *
     * @var string
     */
    public $province;

    /**
     * @example Northeast China
     *
     * @var string
     */
    public $region;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example CMN-A01
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @example online
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example 银泰武林店
     *
     * @var string
     */
    public $space;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example WARNING
     *
     * @var string
     */
    public $status;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $type;

    /**
     * @example a-iuhb098uyhbvgh
     *
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'aggregateDataName'  => 'AggregateDataName',
        'city'               => 'City',
        'country'            => 'Country',
        'dedicatedLineId'    => 'DedicatedLineId',
        'dedicatedLineName'  => 'DedicatedLineName',
        'deviceForm'         => 'DeviceForm',
        'deviceId'           => 'DeviceId',
        'domain'             => 'Domain',
        'hostName'           => 'HostName',
        'instanceId'         => 'InstanceId',
        'manufacturer'       => 'Manufacturer',
        'maxResults'         => 'MaxResults',
        'model'              => 'Model',
        'monitorItemId'      => 'MonitorItemId',
        'nextToken'          => 'NextToken',
        'physicalSpaceId'    => 'PhysicalSpaceId',
        'portCollectionId'   => 'PortCollectionId',
        'portCollectionName' => 'PortCollectionName',
        'province'           => 'Province',
        'region'             => 'Region',
        'role'               => 'Role',
        'securityDomain'     => 'SecurityDomain',
        'serviceStatus'      => 'ServiceStatus',
        'space'              => 'Space',
        'spaceType'          => 'SpaceType',
        'status'             => 'Status',
        'type'               => 'Type',
        'uniqueKey'          => 'UniqueKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDataName) {
            $res['AggregateDataName'] = $this->aggregateDataName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->dedicatedLineId) {
            $res['DedicatedLineId'] = $this->dedicatedLineId;
        }
        if (null !== $this->dedicatedLineName) {
            $res['DedicatedLineName'] = $this->dedicatedLineName;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->portCollectionName) {
            $res['PortCollectionName'] = $this->portCollectionName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uniqueKey) {
            $res['UniqueKey'] = $this->uniqueKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataName'])) {
            $model->aggregateDataName = $map['AggregateDataName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['DedicatedLineId'])) {
            $model->dedicatedLineId = $map['DedicatedLineId'];
        }
        if (isset($map['DedicatedLineName'])) {
            $model->dedicatedLineName = $map['DedicatedLineName'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['PortCollectionName'])) {
            $model->portCollectionName = $map['PortCollectionName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UniqueKey'])) {
            $model->uniqueKey = $map['UniqueKey'];
        }

        return $model;
    }
}
