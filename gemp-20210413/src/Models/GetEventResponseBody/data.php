<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 告警内容
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
     * @description 告警源ID
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @description 告警源名称
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
