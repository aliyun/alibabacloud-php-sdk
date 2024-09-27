<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SearchCloudGtmInstanceConfigsRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US (default): English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The availability state of the access domain name. Valid values:
     *
     *   available: If the access domain name is **enabled** and the health state is **normal**, the access domain name is deemed **available**.
     *   unavailable: If the access domain name is **disabled** or the health state is **abnormal**, the access domain name is deemed **unavailable**.
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can specify a custom value for this parameter, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The enabling state of the access domain name. Valid values:
     *
     *   enable: The access domain name is enabled and the intelligent scheduling policy of the corresponding GTM instance takes effect.
     *   disable: The access domain name is disabled and the intelligent scheduling policy of the corresponding GTM instance does not take effect.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The health state of the access domain name. Valid values:
     *
     *   ok: The health state of the access domain name is normal and all address pools that are referenced by the access domain name are available.
     *   ok_alert: The health state of the access domain name is warning and some of the address pools that are referenced by the access domain name are unavailable. In this case, only the available address pools are returned for Domain Name System (DNS) requests.
     *   exceptional: The health state of the access domain name is abnormal and all address pools that are referenced by the access domain name are unavailable. In this case, addresses in the non-empty address pool with the smallest sequence number are preferentially used for fallback resolution. This returns DNS results for clients as much as possible.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The ID of the Global Traffic Manager (GTM) 3.0 instance.
     *
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Current page number, starting from 1, default is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows per page when paginating queries, with a maximum value of **100**, and a default of **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Remarks for the domain instance.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The access domain name. The value of this parameter is composed of the value of ScheduleHostname and the value of ScheduleZoneName.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @description The zone such as example.com or subzone such as a.example.com of the access domain name. In most cases, the zone or subzone is hosted by the Public Authoritative DNS module of Alibaba Cloud DNS. This zone belongs to the account to which the GTM instance belongs.
     *
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'availableStatus'    => 'AvailableStatus',
        'clientToken'        => 'ClientToken',
        'enableStatus'       => 'EnableStatus',
        'healthStatus'       => 'HealthStatus',
        'instanceId'         => 'InstanceId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'scheduleDomainName' => 'ScheduleDomainName',
        'scheduleZoneName'   => 'ScheduleZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scheduleDomainName) {
            $res['ScheduleDomainName'] = $this->scheduleDomainName;
        }
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCloudGtmInstanceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScheduleDomainName'])) {
            $model->scheduleDomainName = $map['ScheduleDomainName'];
        }
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }

        return $model;
    }
}
