<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponseBody\resultObject\ruleHitRecords;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var int
     */
    public $requestTime;

    /**
     * @var ruleHitRecords[]
     */
    public $ruleHitRecords;

    /**
     * @var string
     */
    public $sRequestId;

    /**
     * @var int
     */
    public $totalCost;
    protected $_name = [
        'eventCode'      => 'eventCode',
        'eventName'      => 'eventName',
        'inputs'         => 'inputs',
        'outputs'        => 'outputs',
        'requestTime'    => 'requestTime',
        'ruleHitRecords' => 'ruleHitRecords',
        'sRequestId'     => 'sRequestId',
        'totalCost'      => 'totalCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->inputs) {
            $res['inputs'] = $this->inputs;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }
        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }
        if (null !== $this->ruleHitRecords) {
            $res['ruleHitRecords'] = [];
            if (null !== $this->ruleHitRecords && \is_array($this->ruleHitRecords)) {
                $n = 0;
                foreach ($this->ruleHitRecords as $item) {
                    $res['ruleHitRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sRequestId) {
            $res['sRequestId'] = $this->sRequestId;
        }
        if (null !== $this->totalCost) {
            $res['totalCost'] = $this->totalCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['inputs'])) {
            $model->inputs = $map['inputs'];
        }
        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }
        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }
        if (isset($map['ruleHitRecords'])) {
            if (!empty($map['ruleHitRecords'])) {
                $model->ruleHitRecords = [];
                $n                     = 0;
                foreach ($map['ruleHitRecords'] as $item) {
                    $model->ruleHitRecords[$n++] = null !== $item ? ruleHitRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sRequestId'])) {
            $model->sRequestId = $map['sRequestId'];
        }
        if (isset($map['totalCost'])) {
            $model->totalCost = $map['totalCost'];
        }

        return $model;
    }
}
