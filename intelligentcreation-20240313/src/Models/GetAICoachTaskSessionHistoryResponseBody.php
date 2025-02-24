<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachTaskSessionHistoryResponseBody\conversationList;

class GetAICoachTaskSessionHistoryResponseBody extends Model
{
    /**
     * @var conversationList[]
     */
    public $conversationList;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $pauseDuration;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scriptName;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $total;
    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'conversationList' => 'conversationList',
        'duration'         => 'duration',
        'endTime'          => 'endTime',
        'pauseDuration'    => 'pauseDuration',
        'requestId'        => 'requestId',
        'scriptName'       => 'scriptName',
        'startTime'        => 'startTime',
        'status'           => 'status',
        'total'            => 'total',
        'uid'              => 'uid',
    ];

    public function validate()
    {
        if (\is_array($this->conversationList)) {
            Model::validateArray($this->conversationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationList) {
            if (\is_array($this->conversationList)) {
                $res['conversationList'] = [];
                $n1                      = 0;
                foreach ($this->conversationList as $item1) {
                    $res['conversationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->pauseDuration) {
            $res['pauseDuration'] = $this->pauseDuration;
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

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['conversationList'])) {
            if (!empty($map['conversationList'])) {
                $model->conversationList = [];
                $n1                      = 0;
                foreach ($map['conversationList'] as $item1) {
                    $model->conversationList[$n1++] = conversationList::fromMap($item1);
                }
            }
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['pauseDuration'])) {
            $model->pauseDuration = $map['pauseDuration'];
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

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
