<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;

class event extends Model
{
    /**
     * @var int
     */
    public $alertId;
    /**
     * @var string
     */
    public $alertName;
    /**
     * @var string
     */
    public $alertRule;
    /**
     * @var int
     */
    public $alertType;
    /**
     * @var string
     */
    public $eventLevel;
    /**
     * @var int
     */
    public $eventTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string[]
     */
    public $links;
    /**
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
        if (\is_array($this->links)) {
            Model::validateArray($this->links);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->links)) {
                $res['Links'] = [];
                $n1           = 0;
                foreach ($this->links as $item1) {
                    $res['Links'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
                $model->links = [];
                $n1           = 0;
                foreach ($map['Links'] as $item1) {
                    $model->links[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
