<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmInstanceConfigBasicRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'clientToken'      => 'ClientToken',
        'configId'         => 'ConfigId',
        'instanceId'       => 'InstanceId',
        'scheduleHostname' => 'ScheduleHostname',
        'scheduleZoneName' => 'ScheduleZoneName',
        'ttl'              => 'Ttl',
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
