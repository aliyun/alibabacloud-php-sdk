<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description The ID of the alert rule that is associated with the event.
     *
     * @example 123
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The name of the alert rule that is associated with the event.
     *
     * @example alertName
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The condition of the alert rule.
     *
     * @example {\"operator\":\"&\",\"rules\":[{\"aggregates\":\"AVG\",\"alias\":\"JVM_线程总数\",\"measure\":\"appstat.jvm.ThreadCount\",\"nValue\":1,\"operator\":\"HOH_DOWN\",\"value\":50.0}]}
     *
     * @var string
     */
    public $alertRule;

    /**
     * @description The type of the alert rule. This parameter is not returned. Valid values:
     *
     *   `1`: custom alert rules to monitor drill-down data sets
     *   `3`: custom alert rules to monitor tiled data sets
     *   `4`: alert rules to monitor the frontend, including the default frontend alert rules
     *   `5`: alert rules to monitor applications, including the default application alert rules
     *   `6`: the default frontend alert rules
     *   `7`: the default application alert rules
     *   `8`: Tracing Analysis alert rules
     *   `101`: Prometheus alert rules
     *
     * @example 4
     *
     * @var int
     */
    public $alertType;

    /**
     * @description The severity of the event.
     *
     * @example 1
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The timestamp when the event occurred.
     *
     * @example 1595569020000
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description The ID of the event record.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The list of event URLs.
     *
     * @var string[]
     */
    public $links;

    /**
     * @description The event content. The parameter value is a JSON string. Each key indicates a dimension and each value indicates the alert content in the dimension.
     *
     * @example unknow紧急报警\nip：172.27.XX.XX\n应用名 = test\nRegion = cn-shenzhen\n异常信息 = {\"timestamp\"：\"1615447972235\"}
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'alertId'    => 'AlertId',
        'alertName'  => 'AlertName',
        'alertRule'  => 'AlertRule',
        'alertType'  => 'AlertType',
        'eventLevel' => 'EventLevel',
        'eventTime'  => 'EventTime',
        'id'         => 'Id',
        'links'      => 'Links',
        'message'    => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->links) {
            $res['Links'] = $this->links;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = $map['Links'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
