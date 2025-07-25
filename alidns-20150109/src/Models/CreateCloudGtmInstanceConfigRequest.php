<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudGtmInstanceConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

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
     *   disable: The access domain name is disabled and the intelligent scheduling policy of the corresponding GTM instance is unavailable.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The ID of the Global Traffic Manager (GTM) 3.0 instance. This ID uniquely identifies a GTM 3.0 instance.
     *
     * @example gtm-cn-jmp3qnw**03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description of the access domain name.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The hostname of the access domain name.
     *
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @description The type of the Domain Name System (DNS) record configured for the access domain name. Valid values:
     *
     *   A: IPv4 address
     *   AAAA: IPv6 address
     *   CNAME: domain name
     *
     * @example A
     *
     * @var string
     */
    public $scheduleRrType;

    /**
     * @description The configuration mode of the access domain name. Valid values:
     *
     *   sys_assign: system allocation. This mode is not supported.
     *   custom: custom allocation. You must select a zone within the account to which the instance belongs and enter a hostname to generate an access domain name.
     *
     * @example custom
     *
     * @var string
     */
    public $scheduleZoneMode;

    /**
     * @description The name of the parent zone for the access domain name configured in GTM. In most cases, the value of this parameter is the name of a zone hosted by Alibaba Cloud DNS. This zone belongs to the account to which the GTM instance belongs. You can specify the name of a zone or subzone.
     *
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @description The global time to live (TTL) period. Unit: seconds. The global TTL period affects how long the DNS records that map the access domain name to the addresses in the address pools are cached in the local DNS servers of Internet service providers (ISPs). You can specify a custom value.
     *
     * @example 30
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clientToken' => 'ClientToken',
        'enableStatus' => 'EnableStatus',
        'instanceId' => 'InstanceId',
        'remark' => 'Remark',
        'scheduleHostname' => 'ScheduleHostname',
        'scheduleRrType' => 'ScheduleRrType',
        'scheduleZoneMode' => 'ScheduleZoneMode',
        'scheduleZoneName' => 'ScheduleZoneName',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scheduleHostname) {
            $res['ScheduleHostname'] = $this->scheduleHostname;
        }
        if (null !== $this->scheduleRrType) {
            $res['ScheduleRrType'] = $this->scheduleRrType;
        }
        if (null !== $this->scheduleZoneMode) {
            $res['ScheduleZoneMode'] = $this->scheduleZoneMode;
        }
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScheduleHostname'])) {
            $model->scheduleHostname = $map['ScheduleHostname'];
        }
        if (isset($map['ScheduleRrType'])) {
            $model->scheduleRrType = $map['ScheduleRrType'];
        }
        if (isset($map['ScheduleZoneMode'])) {
            $model->scheduleZoneMode = $map['ScheduleZoneMode'];
        }
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
