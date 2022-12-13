<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example “”
     *
     * @var string
     */
    public $eventJson;

    /**
     * @example 2002-09-08 15:30:35
     *
     * @var string
     */
    public $eventTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @example zabbix
     *
     * @var string
     */
    public $monitorSourceName;
    protected $_name = [
        'eventJson'         => 'eventJson',
        'eventTime'         => 'eventTime',
        'monitorSourceId'   => 'monitorSourceId',
        'monitorSourceName' => 'monitorSourceName',
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
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
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
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }

        return $model;
    }
}
