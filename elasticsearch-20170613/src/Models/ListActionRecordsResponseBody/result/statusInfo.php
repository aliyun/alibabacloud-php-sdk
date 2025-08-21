<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody\result\statusInfo\subStatusInfo;

class statusInfo extends Model
{
    /**
     * @var int
     */
    public $completeNodeCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $exception;

    /**
     * @var int
     */
    public $latencyMills;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $process;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $stateType;

    /**
     * @var string
     */
    public $subState;

    /**
     * @var subStatusInfo[]
     */
    public $subStatusInfo;
    protected $_name = [
        'completeNodeCount' => 'completeNodeCount',
        'endTime' => 'endTime',
        'exception' => 'exception',
        'latencyMills' => 'latencyMills',
        'nodeCount' => 'nodeCount',
        'process' => 'process',
        'startTime' => 'startTime',
        'stateType' => 'stateType',
        'subState' => 'subState',
        'subStatusInfo' => 'subStatusInfo',
    ];

    public function validate()
    {
        if (\is_array($this->subStatusInfo)) {
            Model::validateArray($this->subStatusInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeNodeCount) {
            $res['completeNodeCount'] = $this->completeNodeCount;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->exception) {
            $res['exception'] = $this->exception;
        }

        if (null !== $this->latencyMills) {
            $res['latencyMills'] = $this->latencyMills;
        }

        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }

        if (null !== $this->process) {
            $res['process'] = $this->process;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->stateType) {
            $res['stateType'] = $this->stateType;
        }

        if (null !== $this->subState) {
            $res['subState'] = $this->subState;
        }

        if (null !== $this->subStatusInfo) {
            if (\is_array($this->subStatusInfo)) {
                $res['subStatusInfo'] = [];
                $n1 = 0;
                foreach ($this->subStatusInfo as $item1) {
                    $res['subStatusInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['completeNodeCount'])) {
            $model->completeNodeCount = $map['completeNodeCount'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['exception'])) {
            $model->exception = $map['exception'];
        }

        if (isset($map['latencyMills'])) {
            $model->latencyMills = $map['latencyMills'];
        }

        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }

        if (isset($map['process'])) {
            $model->process = $map['process'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['stateType'])) {
            $model->stateType = $map['stateType'];
        }

        if (isset($map['subState'])) {
            $model->subState = $map['subState'];
        }

        if (isset($map['subStatusInfo'])) {
            if (!empty($map['subStatusInfo'])) {
                $model->subStatusInfo = [];
                $n1 = 0;
                foreach ($map['subStatusInfo'] as $item1) {
                    $model->subStatusInfo[$n1] = subStatusInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
