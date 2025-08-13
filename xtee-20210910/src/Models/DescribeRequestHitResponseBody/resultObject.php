<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRequestHitResponseBody\resultObject\ruleHitRecords;

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
        'eventCode' => 'eventCode',
        'eventName' => 'eventName',
        'inputs' => 'inputs',
        'outputs' => 'outputs',
        'requestTime' => 'requestTime',
        'ruleHitRecords' => 'ruleHitRecords',
        'sRequestId' => 'sRequestId',
        'totalCost' => 'totalCost',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitRecords)) {
            Model::validateArray($this->ruleHitRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ruleHitRecords)) {
                $res['ruleHitRecords'] = [];
                $n1 = 0;
                foreach ($this->ruleHitRecords as $item1) {
                    $res['ruleHitRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ruleHitRecords'] as $item1) {
                    $model->ruleHitRecords[$n1] = ruleHitRecords::fromMap($item1);
                    ++$n1;
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
