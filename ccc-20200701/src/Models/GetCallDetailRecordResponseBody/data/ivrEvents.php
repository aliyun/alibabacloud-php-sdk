<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\ivrEvents\eventSequence;
use AlibabaCloud\Tea\Model;

class ivrEvents extends Model
{
    /**
     * @var eventSequence[]
     */
    public $eventSequence;

    /**
     * @example edaf2eaa-8f88-44ca-812e-41b3cd2b7a90
     *
     * @var string
     */
    public $flowId;

    /**
     * @example MAIN_FLOW
     *
     * @var string
     */
    public $flowType;
    protected $_name = [
        'eventSequence' => 'EventSequence',
        'flowId' => 'FlowId',
        'flowType' => 'FlowType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSequence) {
            $res['EventSequence'] = [];
            if (null !== $this->eventSequence && \is_array($this->eventSequence)) {
                $n = 0;
                foreach ($this->eventSequence as $item) {
                    $res['EventSequence'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ivrEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSequence'])) {
            if (!empty($map['EventSequence'])) {
                $model->eventSequence = [];
                $n = 0;
                foreach ($map['EventSequence'] as $item) {
                    $model->eventSequence[$n++] = null !== $item ? eventSequence::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        return $model;
    }
}
