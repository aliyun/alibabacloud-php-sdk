<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTopDTO;

use AlibabaCloud\Tea\Model;

class suspEventList extends Model
{
    /**
     * @description Alert name.
     *
     * @example 主动外连风险 IP
     *
     * @var string
     */
    public $eventName;

    /**
     * @description Count.
     *
     * @example 7
     *
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'eventName' => 'EventName',
        'taskCount' => 'TaskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
