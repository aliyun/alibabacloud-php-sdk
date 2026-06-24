<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\items;

class result extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var diagnoseItems[]
     */
    public $diagnoseItems;

    /**
     * @var string
     */
    public $diagnosisMode;

    /**
     * @var string
     */
    public $health;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $trigger;
    protected $_name = [
        'createTime' => 'createTime',
        'diagnoseItems' => 'diagnoseItems',
        'diagnosisMode' => 'diagnosisMode',
        'health' => 'health',
        'instanceId' => 'instanceId',
        'items' => 'items',
        'reportId' => 'reportId',
        'state' => 'state',
        'trigger' => 'trigger',
    ];

    public function validate()
    {
        if (\is_array($this->diagnoseItems)) {
            Model::validateArray($this->diagnoseItems);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->diagnoseItems) {
            if (\is_array($this->diagnoseItems)) {
                $res['diagnoseItems'] = [];
                $n1 = 0;
                foreach ($this->diagnoseItems as $item1) {
                    $res['diagnoseItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->diagnosisMode) {
            $res['diagnosisMode'] = $this->diagnosisMode;
        }

        if (null !== $this->health) {
            $res['health'] = $this->health;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->trigger) {
            $res['trigger'] = $this->trigger;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['diagnoseItems'])) {
            if (!empty($map['diagnoseItems'])) {
                $model->diagnoseItems = [];
                $n1 = 0;
                foreach ($map['diagnoseItems'] as $item1) {
                    $model->diagnoseItems[$n1] = diagnoseItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['diagnosisMode'])) {
            $model->diagnosisMode = $map['diagnosisMode'];
        }

        if (isset($map['health'])) {
            $model->health = $map['health'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['trigger'])) {
            $model->trigger = $map['trigger'];
        }

        return $model;
    }
}
