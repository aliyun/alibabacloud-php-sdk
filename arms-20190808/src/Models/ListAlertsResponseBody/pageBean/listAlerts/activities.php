<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts;

use AlibabaCloud\Tea\Model;

class activities extends Model
{
    /**
     * @description The content of the alert notification.
     *
     * @example \[Notification policy: Send notifications to DingTalk groups] Host monitoring. Host IP address: 10.76.XX.XX. Average memory usage of the host in the last 1 minute ≥ 1.0%. Current value: 84.7454%.
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the activity.
     *
     * @example \[Alert Claimed] The alert is claimed
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the handler.
     *
     * @example O\&M Engineer A
     *
     * @var string
     */
    public $handlerName;

    /**
     * @description The operation time of the activity.
     *
     * @example 2021-12-20 19:08:57
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of the activity. Valid values:
     *
     *   1: The alert is claimed.
     *   2: The alert is disclaimed.
     *   3: A comment is added for the alert.
     *   4: The alert is disabled.
     *   5: An alert notification is sent.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'handlerName' => 'HandlerName',
        'time'        => 'Time',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
