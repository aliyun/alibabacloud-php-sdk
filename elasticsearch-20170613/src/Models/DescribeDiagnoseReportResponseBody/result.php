<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1535745731000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var diagnoseItems[]
     */
    public $diagnoseItems;

    /**
     * @example YELLOW
     *
     * @var string
     */
    public $health;

    /**
     * @example es-cn-abc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example trigger__2020-08-17T17:09:02
     *
     * @var string
     */
    public $reportId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $state;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $trigger;
    protected $_name = [
        'createTime'    => 'createTime',
        'diagnoseItems' => 'diagnoseItems',
        'health'        => 'health',
        'instanceId'    => 'instanceId',
        'reportId'      => 'reportId',
        'state'         => 'state',
        'trigger'       => 'trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
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
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
