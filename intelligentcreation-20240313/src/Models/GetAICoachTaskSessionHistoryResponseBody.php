<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponseBody\conversationList;
use AlibabaCloud\Tea\Model;

class GetAICoachTaskSessionHistoryResponseBody extends Model
{
    /**
     * @var conversationList[]
     */
    public $conversationList;

    /**
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2024-11-08 09:33:21
     *
     * @var string
     */
    public $endTime;

    /**
     * @example D5798660-1531-5D12-9C20-16FEE9D22351
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example 2024-08-21 05:00:01
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @example 1579404690269235
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'conversationList' => 'conversationList',
        'duration'         => 'duration',
        'endTime'          => 'endTime',
        'requestId'        => 'requestId',
        'scriptName'       => 'scriptName',
        'startTime'        => 'startTime',
        'status'           => 'status',
        'uid'              => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationList) {
            $res['conversationList'] = [];
            if (null !== $this->conversationList && \is_array($this->conversationList)) {
                $n = 0;
                foreach ($this->conversationList as $item) {
                    $res['conversationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAICoachTaskSessionHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conversationList'])) {
            if (!empty($map['conversationList'])) {
                $model->conversationList = [];
                $n                       = 0;
                foreach ($map['conversationList'] as $item) {
                    $model->conversationList[$n++] = null !== $item ? conversationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
