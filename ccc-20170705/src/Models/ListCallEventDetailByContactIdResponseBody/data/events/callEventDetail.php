<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail\detailData;

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
        'agentName' => 'AgentName',
        'callMode' => 'CallMode',
        'detailData' => 'DetailData',
        'duration' => 'Duration',
        'event' => 'Event',
        'status' => 'Status',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        if (null !== $this->detailData) {
            $this->detailData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->callMode) {
            $res['CallMode'] = $this->callMode;
        }

        if (null !== $this->detailData) {
            $res['DetailData'] = null !== $this->detailData ? $this->detailData->toArray($noStream) : $this->detailData;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
