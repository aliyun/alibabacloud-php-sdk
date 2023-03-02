<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\instances;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\slaAlert;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\topics;
use AlibabaCloud\Tea\Model;

class alertMessages extends Model
{
    /**
     * @description The ID of the alert.
     *
     * @example 1234
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The sending status of the notification. Valid values: READY_TO_SEND, SEND_FAIL, SEND_SUCCESS, and SEND_OVERLIMIT. The value READY_TO_SEND indicates that the notification is waiting to be sent. The value SEND_FAIL indicates that the notification fails to be sent. The value SEND_SUCCESS indicates that the notification is sent. The value SEND_OVERLIMIT indicates that the number of notifications that are sent exceeds the upper limit.
     *
     * @example READY_TO_SEND
     *
     * @var string
     */
    public $alertMessageStatus;

    /**
     * @description The notification method. Valid values: MAIL, SMS, and PHONE. The value MAIL indicates that the notification is sent by email. The value SMS indicates that the notification is sent by text message. The value PHONE indicates that the notification is sent by phone call. Only DataWorks Professional Edition and more advanced editions support the PHONE notification method.
     *
     * @example SMS
     *
     * @var string
     */
    public $alertMethod;

    /**
     * @description The timestamp when the alert was reported.
     *
     * @example 1553531401000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description The ID of the Alibaba Cloud used by the alert recipient.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $alertUser;

    /**
     * @description The content of the alert.
     *
     * @var string
     */
    public $content;

    /**
     * @description The instances that triggered the custom alert rule. This parameter is returned if the value of the Source parameter is REMIND_ALERT. This parameter is left empty if the value of the Source parameter is not REMIND_ALERT.
     *
     * @var instances[]
     */
    public $instances;

    /**
     * @description The nodes returned for different alert sources.
     *
     *   The nodes that form a loop are returned if the value of the Source parameter is NODE_CYCLE_ALERT.
     *   The nodes that are isolated are returned if the value of the Source parameter is NODE_LONELY_ALERT.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The ID of the custom alert rule that was triggered. This parameter is returned if the value of the Source parameter is REMIND_ALERT.
     *
     * @example 1234
     *
     * @var int
     */
    public $remindId;

    /**
     * @description The name of the custom alert rule that was triggered. This parameter is returned if the value of the Source parameter is REMIND_ALERT.
     *
     * @var string
     */
    public $remindName;

    /**
     * @description The basic information about the baseline instance that triggered an alert. This parameter is returned if the value of the Source parameter is SLA_ALERT. This parameter is left empty if the value of the Source parameter is not SLA_ALERT.
     *
     * @var slaAlert
     */
    public $slaAlert;

    /**
     * @description The type of the alert. Valid values: REMIND_ALERT, TOPIC_ALERT, SLA_ALERT, NODE_CYCLE_ALERT, and NODE_LONELY_ALERT. The value REMIND_ALERT indicates that the alert is a custom alert. The value TOPIC_ALERT indicates that the alert is an event alert. The value SLA_ALERT indicates that the alert is a baseline alert. The value NODE_CYCLE_ALERT indicates that the alert is reported for a node dependency loop. The value NODE_LONELY_ALERT indicates that the alert is reported for isolated nodes.
     *
     * @example REMIND_ALERT
     *
     * @var string
     */
    public $source;

    /**
     * @description The events that triggered alerts. This parameter is returned if the value of the Source parameter is TOPIC_ALERT. This parameter is left empty if the value of the Source parameter is not TOPIC_ALERT.
     *
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'alertId'            => 'AlertId',
        'alertMessageStatus' => 'AlertMessageStatus',
        'alertMethod'        => 'AlertMethod',
        'alertTime'          => 'AlertTime',
        'alertUser'          => 'AlertUser',
        'content'            => 'Content',
        'instances'          => 'Instances',
        'nodes'              => 'Nodes',
        'remindId'           => 'RemindId',
        'remindName'         => 'RemindName',
        'slaAlert'           => 'SlaAlert',
        'source'             => 'Source',
        'topics'             => 'Topics',
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
        if (null !== $this->alertMessageStatus) {
            $res['AlertMessageStatus'] = $this->alertMessageStatus;
        }
        if (null !== $this->alertMethod) {
            $res['AlertMethod'] = $this->alertMethod;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->alertUser) {
            $res['AlertUser'] = $this->alertUser;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->slaAlert) {
            $res['SlaAlert'] = null !== $this->slaAlert ? $this->slaAlert->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertMessageStatus'])) {
            $model->alertMessageStatus = $map['AlertMessageStatus'];
        }
        if (isset($map['AlertMethod'])) {
            $model->alertMethod = $map['AlertMethod'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['AlertUser'])) {
            $model->alertUser = $map['AlertUser'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['SlaAlert'])) {
            $model->slaAlert = slaAlert::fromMap($map['SlaAlert']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
