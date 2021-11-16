<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 告警内容json
     *
     * @var string
     */
    public $eventJson;

    /**
     * @description 告警上报时间
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description 关联对象ID
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description INCIDENT 事件、ALERT 报警、PROBLEM 故障
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 监控告警源ID
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @description 监控告警源名称
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 规则ID
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @description 租户ID
     *
     * @var int
     */
    public $tenantRamId;
    protected $_name = [
        'eventJson'         => 'eventJson',
        'eventTime'         => 'eventTime',
        'instanceId'        => 'instanceId',
        'instanceType'      => 'instanceType',
        'monitorSourceId'   => 'monitorSourceId',
        'monitorSourceName' => 'monitorSourceName',
        'routeRuleId'       => 'routeRuleId',
        'tenantRamId'       => 'tenantRamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventJson) {
            $res['eventJson'] = $this->eventJson;
        }
        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }
        if (null !== $this->tenantRamId) {
            $res['tenantRamId'] = $this->tenantRamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventJson'])) {
            $model->eventJson = $map['eventJson'];
        }
        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['tenantRamId'])) {
            $model->tenantRamId = $map['tenantRamId'];
        }

        return $model;
    }
}
