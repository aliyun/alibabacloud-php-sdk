<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean\events\alarms;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The list of associated alerts.
     *
     * @var alarms[]
     */
    public $alarms;

    /**
     * @description The name of the alert.
     *
     * @example Test-triggered alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The list of annotations.
     *
     * @example [{\"Name\":\"annotation-a\",\"Value\":\"annotation a value\"}]
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The description of the alert event.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The end time of the alert event.
     *
     * @example 2021-12-20 17:42:16
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The URL of the alert event.
     *
     * @example https://xxx.xx/
     *
     * @var string
     */
    public $generatorURL;

    /**
     * @description The user who handled the alert.
     *
     * @example Tom
     *
     * @var string
     */
    public $handlerName;

    /**
     * @description The name of the alert integration.
     *
     * @example Custom integration
     *
     * @var string
     */
    public $integrationName;

    /**
     * @description The type of the alert integration.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The list of tags.
     *
     * @example [{\"name\":\"severity\",\"value\":\"error\"}]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The time when the alert event was received.
     *
     * @example 2021-12-20 17:42:16
     *
     * @var string
     */
    public $receiveTime;

    /**
     * @description The severity level of the alert. Valid value:
     *
     *   critical: P1
     *   error: P2
     *   warning: P3
     *   page: P4
     *   default: P6
     *
     * @example critical
     *
     * @var string
     */
    public $severity;

    /**
     * @description The start time of the alert event.
     *
     * @example 2021-12-20 17:42:16
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   Active
     *   Silenced
     *   Resolved
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alarms'          => 'Alarms',
        'alertName'       => 'AlertName',
        'annotations'     => 'Annotations',
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'generatorURL'    => 'GeneratorURL',
        'handlerName'     => 'HandlerName',
        'integrationName' => 'IntegrationName',
        'integrationType' => 'IntegrationType',
        'labels'          => 'Labels',
        'receiveTime'     => 'ReceiveTime',
        'severity'        => 'Severity',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarms) {
            $res['Alarms'] = [];
            if (null !== $this->alarms && \is_array($this->alarms)) {
                $n = 0;
                foreach ($this->alarms as $item) {
                    $res['Alarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->generatorURL) {
            $res['GeneratorURL'] = $this->generatorURL;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->receiveTime) {
            $res['ReceiveTime'] = $this->receiveTime;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n             = 0;
                foreach ($map['Alarms'] as $item) {
                    $model->alarms[$n++] = null !== $item ? alarms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GeneratorURL'])) {
            $model->generatorURL = $map['GeneratorURL'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['ReceiveTime'])) {
            $model->receiveTime = $map['ReceiveTime'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
