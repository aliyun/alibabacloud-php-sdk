<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CollectorDeployMachine\machines;

class CollectorDeployMachine extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @var string
     */
    public $successPodsCount;

    /**
     * @var string
     */
    public $totalPodsCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configType' => 'configType',
        'groupId' => 'groupId',
        'instanceId' => 'instanceId',
        'machines' => 'machines',
        'successPodsCount' => 'successPodsCount',
        'totalPodsCount' => 'totalPodsCount',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->machines)) {
            Model::validateArray($this->machines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->machines) {
            if (\is_array($this->machines)) {
                $res['machines'] = [];
                $n1 = 0;
                foreach ($this->machines as $item1) {
                    $res['machines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successPodsCount) {
            $res['successPodsCount'] = $this->successPodsCount;
        }

        if (null !== $this->totalPodsCount) {
            $res['totalPodsCount'] = $this->totalPodsCount;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['machines'])) {
            if (!empty($map['machines'])) {
                $model->machines = [];
                $n1 = 0;
                foreach ($map['machines'] as $item1) {
                    $model->machines[$n1] = machines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['successPodsCount'])) {
            $model->successPodsCount = $map['successPodsCount'];
        }

        if (isset($map['totalPodsCount'])) {
            $model->totalPodsCount = $map['totalPodsCount'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
