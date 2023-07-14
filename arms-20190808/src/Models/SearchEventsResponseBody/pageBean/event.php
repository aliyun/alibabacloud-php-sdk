<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $alertId;

    /**
     * @example alertName
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The ID of the request.
     *
     * @var string
     */
    public $alertRule;

    /**
     * @description The name of the alert rule that is associated with the event.
     *
     * @example 4
     *
     * @var int
     */
    public $alertType;

    /**
     * @description The number of entries to return on each page. Default value: `10`.
     *
     * @example 1
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The struct returned.
     *
     * @example 1595569020000
     *
     * @var int
     */
    public $eventTime;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $links;

    /**
     * @description The condition of the alert rule.
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
