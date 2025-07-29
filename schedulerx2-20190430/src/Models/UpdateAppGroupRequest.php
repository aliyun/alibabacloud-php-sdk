<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppGroupRequest extends Model
{
    /**
     * @description The application version. 1: Basic version, 2: Professional version.
     *
     * @example 2
     *
     * @var int
     */
    public $appVersion;

    /**
     * @description The description of the application.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application. You can obtain the application ID on the **Application Management** page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum number of concurrent instances. Default value: 1. A value of 1 specifies that if the last triggered instance is running, the next instance is not triggered even if the scheduled point in time for running the next instance is reached.
     *
     * @example 1
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description The configuration of the alert. The value is a JSON string. For more information about this parameter, see **Additional information about request parameters**.
     *
     * @example {
     * "sendChannel": "ding,sms,mail,phone",
     * "alarmType": "Contacts",
     * "webhookIsAtAll": false
     * }
     *
     * @var string
     */
    public $monitorConfigJson;

    /**
     * @description The configuration of alert contacts. The value is a JSON string.
     *
     * @example [{"userName":"Tom","userPhone":"89756******"},{"userName":"Bob","ding":"http://www.example.com"}]
     *
     * @var string
     */
    public $monitorContactsJson;

    /**
     * @description The ID of the namespace. You can obtain the ID of the namespace on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'maxConcurrency' => 'MaxConcurrency',
        'monitorConfigJson' => 'MonitorConfigJson',
        'monitorContactsJson' => 'MonitorContactsJson',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->monitorConfigJson) {
            $res['MonitorConfigJson'] = $this->monitorConfigJson;
        }
        if (null !== $this->monitorContactsJson) {
            $res['MonitorContactsJson'] = $this->monitorContactsJson;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['MonitorConfigJson'])) {
            $model->monitorConfigJson = $map['MonitorConfigJson'];
        }
        if (isset($map['MonitorContactsJson'])) {
            $model->monitorContactsJson = $map['MonitorContactsJson'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
