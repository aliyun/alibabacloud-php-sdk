<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var string[]
     */
    public $links;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $alertRule;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $alertId;
    protected $_name = [
        'eventTime'  => 'EventTime',
        'links'      => 'Links',
        'eventLevel' => 'EventLevel',
        'alertRule'  => 'AlertRule',
        'message'    => 'Message',
        'alertType'  => 'AlertType',
        'alertName'  => 'AlertName',
        'id'         => 'Id',
        'alertId'    => 'AlertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->links) {
            $res['Links'] = $this->links;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
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
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = $map['Links'];
            }
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        return $model;
    }
}
