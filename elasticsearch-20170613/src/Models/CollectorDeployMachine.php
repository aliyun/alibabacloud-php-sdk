<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CollectorDeployMachine\machines;
use AlibabaCloud\Tea\Model;

class CollectorDeployMachine extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example collectorDeployMachine
     *
     * @var string
     */
    public $configType;

    /**
     * @example default_ct-cn-f3t0dq5p97199ru3z
     *
     * @var string
     */
    public $groupId;

    /**
     * @example ce93d7566df2141f490f0f60f646252c3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var machines[]
     */
    public $machines;

    /**
     * @example 1
     *
     * @var string
     */
    public $successPodsCount;

    /**
     * @example 2
     *
     * @var string
     */
    public $totalPodsCount;

    /**
     * @description This parameter is required.
     *
     * @example ACKCluster
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configType'       => 'configType',
        'groupId'          => 'groupId',
        'instanceId'       => 'instanceId',
        'machines'         => 'machines',
        'successPodsCount' => 'successPodsCount',
        'totalPodsCount'   => 'totalPodsCount',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['machines'] = [];
            if (null !== $this->machines && \is_array($this->machines)) {
                $n = 0;
                foreach ($this->machines as $item) {
                    $res['machines'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CollectorDeployMachine
     */
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
                $n               = 0;
                foreach ($map['machines'] as $item) {
                    $model->machines[$n++] = null !== $item ? machines::fromMap($item) : $item;
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
