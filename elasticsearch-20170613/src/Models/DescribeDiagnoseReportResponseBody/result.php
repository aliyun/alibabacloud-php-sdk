<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $trigger;

    /**
     * @var int
     */
    public $createTime;

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
    public $instanceId;

    /**
     * @var string
     */
    public $health;

    /**
     * @var diagnoseItems[]
     */
    public $diagnoseItems;
    protected $_name = [
        'trigger'       => 'trigger',
        'createTime'    => 'createTime',
        'reportId'      => 'reportId',
        'state'         => 'state',
        'instanceId'    => 'instanceId',
        'health'        => 'health',
        'diagnoseItems' => 'diagnoseItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trigger) {
            $res['trigger'] = $this->trigger;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->diagnoseItems) {
            $res['diagnoseItems'] = [];
            if (null !== $this->diagnoseItems && \is_array($this->diagnoseItems)) {
                $n = 0;
                foreach ($this->diagnoseItems as $item) {
                    $res['diagnoseItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['trigger'])) {
            $model->trigger = $map['trigger'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['diagnoseItems'])) {
            if (!empty($map['diagnoseItems'])) {
                $model->diagnoseItems = [];
                $n                    = 0;
                foreach ($map['diagnoseItems'] as $item) {
                    $model->diagnoseItems[$n++] = null !== $item ? diagnoseItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
