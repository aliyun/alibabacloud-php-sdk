<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponseBody\result\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponseBody\result\result\showContent\actionSuggest;

class showContent extends Model
{
    /**
     * @var actionSuggest
     */
    public $actionSuggest;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $executeFinishTime;

    /**
     * @var string
     */
    public $executeStartTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $opsChangeId;
    protected $_name = [
        'actionSuggest' => 'actionSuggest',
        'desc' => 'desc',
        'eventStatus' => 'eventStatus',
        'eventTime' => 'eventTime',
        'executeFinishTime' => 'executeFinishTime',
        'executeStartTime' => 'executeStartTime',
        'instanceId' => 'instanceId',
        'opsChangeId' => 'opsChangeId',
    ];

    public function validate()
    {
        if (null !== $this->actionSuggest) {
            $this->actionSuggest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionSuggest) {
            $res['actionSuggest'] = null !== $this->actionSuggest ? $this->actionSuggest->toArray($noStream) : $this->actionSuggest;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->eventStatus) {
            $res['eventStatus'] = $this->eventStatus;
        }

        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }

        if (null !== $this->executeFinishTime) {
            $res['executeFinishTime'] = $this->executeFinishTime;
        }

        if (null !== $this->executeStartTime) {
            $res['executeStartTime'] = $this->executeStartTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->opsChangeId) {
            $res['opsChangeId'] = $this->opsChangeId;
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
        if (isset($map['actionSuggest'])) {
            $model->actionSuggest = actionSuggest::fromMap($map['actionSuggest']);
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['eventStatus'])) {
            $model->eventStatus = $map['eventStatus'];
        }

        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }

        if (isset($map['executeFinishTime'])) {
            $model->executeFinishTime = $map['executeFinishTime'];
        }

        if (isset($map['executeStartTime'])) {
            $model->executeStartTime = $map['executeStartTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['opsChangeId'])) {
            $model->opsChangeId = $map['opsChangeId'];
        }

        return $model;
    }
}
