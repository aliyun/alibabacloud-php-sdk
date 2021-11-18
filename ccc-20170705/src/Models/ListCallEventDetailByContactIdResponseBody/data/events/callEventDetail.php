<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail\detailData;
use AlibabaCloud\Tea\Model;

class callEventDetail extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $callMode;

    /**
     * @var detailData
     */
    public $detailData;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'agentName'  => 'AgentName',
        'callMode'   => 'CallMode',
        'detailData' => 'DetailData',
        'duration'   => 'Duration',
        'event'      => 'Event',
        'status'     => 'Status',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->callMode) {
            $res['CallMode'] = $this->callMode;
        }
        if (null !== $this->detailData) {
            $res['DetailData'] = null !== $this->detailData ? $this->detailData->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callEventDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['CallMode'])) {
            $model->callMode = $map['CallMode'];
        }
        if (isset($map['DetailData'])) {
            $model->detailData = detailData::fromMap($map['DetailData']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
