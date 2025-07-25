<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmInstanceConfigBasicRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   **zh-CN**: Chinese
     *   **en-US** (default): English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration ID of the access domain name. Two configuration IDs exist when the access domain name is bound to the same GTM instance but an A record and an AAAA record are configured for the access domain name. The configuration ID uniquely identifies a configuration.
     *
     * You can call the [ListCloudGtmInstanceConfigs](https://help.aliyun.com/document_detail/2797349.html) operation to query the value of ConfigId for the access domain name.
     *
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @description The ID of the GTM 3.0 instance for which you want to modify the TTL configuration.
     *
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Host record of the domain accessed by GTM.
     *
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @description The zone (such as example.com) or subzone (such as a.example.com) of the GTM access domain name. In most cases, the zone or subzone is hosted in Authoritative DNS Resolution of the Alibaba Cloud DNS console within the account to which the GTM instance belongs.
     *
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @description The global TTL value, in seconds. The global TTL value affects how long the DNS records that map the access domain name to the addresses in the address pools are cached in the local DNS servers of Internet service providers (ISPs).
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clientToken' => 'ClientToken',
        'configId' => 'ConfigId',
        'instanceId' => 'InstanceId',
        'scheduleHostname' => 'ScheduleHostname',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scheduleHostname) {
            $res['ScheduleHostname'] = $this->scheduleHostname;
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
     * @return UpdateCloudGtmInstanceConfigBasicRequest
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScheduleHostname'])) {
            $model->scheduleHostname = $map['ScheduleHostname'];
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
