<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean\events\alarms;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean\events\notificationPolicies;

class events extends Model
{
    /**
     * @var alarms[]
     */
    public $alarms;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $generatorURL;

    /**
     * @var string
     */
    public $handlerName;

    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var notificationPolicies[]
     */
    public $notificationPolicies;

    /**
     * @var string
     */
    public $receiveTime;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $triggerCount;
    protected $_name = [
        'alarms' => 'Alarms',
        'alertName' => 'AlertName',
        'annotations' => 'Annotations',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'generatorURL' => 'GeneratorURL',
        'handlerName' => 'HandlerName',
        'integrationName' => 'IntegrationName',
        'integrationType' => 'IntegrationType',
        'labels' => 'Labels',
        'notificationPolicies' => 'NotificationPolicies',
        'receiveTime' => 'ReceiveTime',
        'severity' => 'Severity',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'triggerCount' => 'TriggerCount',
    ];

    public function validate()
    {
        if (\is_array($this->alarms)) {
            Model::validateArray($this->alarms);
        }
        if (\is_array($this->notificationPolicies)) {
            Model::validateArray($this->notificationPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarms) {
            if (\is_array($this->alarms)) {
                $res['Alarms'] = [];
                $n1 = 0;
                foreach ($this->alarms as $item1) {
                    $res['Alarms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->notificationPolicies) {
            if (\is_array($this->notificationPolicies)) {
                $res['NotificationPolicies'] = [];
                $n1 = 0;
                foreach ($this->notificationPolicies as $item1) {
                    $res['NotificationPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->triggerCount) {
            $res['TriggerCount'] = $this->triggerCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n1 = 0;
                foreach ($map['Alarms'] as $item1) {
                    $model->alarms[$n1] = alarms::fromMap($item1);
                    ++$n1;
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

        if (isset($map['NotificationPolicies'])) {
            if (!empty($map['NotificationPolicies'])) {
                $model->notificationPolicies = [];
                $n1 = 0;
                foreach ($map['NotificationPolicies'] as $item1) {
                    $model->notificationPolicies[$n1] = notificationPolicies::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['TriggerCount'])) {
            $model->triggerCount = $map['TriggerCount'];
        }

        return $model;
    }
}
