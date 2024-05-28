<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudGtmInstanceConfigRequest extends Model
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
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example gtm-cn-jmp3qnw**03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @example A
     *
     * @var string
     */
    public $scheduleRrType;

    /**
     * @example custom
     *
     * @var string
     */
    public $scheduleZoneMode;

    /**
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @example 30
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'clientToken'      => 'ClientToken',
        'enableStatus'     => 'EnableStatus',
        'instanceId'       => 'InstanceId',
        'remark'           => 'Remark',
        'scheduleHostname' => 'ScheduleHostname',
        'scheduleRrType'   => 'ScheduleRrType',
        'scheduleZoneMode' => 'ScheduleZoneMode',
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
