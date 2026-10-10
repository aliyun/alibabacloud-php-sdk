<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\dataset;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\trajectory;

class source extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var trajectory
     */
    public $trajectory;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'dataset' => 'dataset',
        'startTime' => 'startTime',
        'trajectory' => 'trajectory',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        if (null !== $this->trajectory) {
            $this->trajectory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->trajectory) {
            $res['trajectory'] = null !== $this->trajectory ? $this->trajectory->toArray($noStream) : $this->trajectory;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['trajectory'])) {
            $model->trajectory = trajectory::fromMap($map['trajectory']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
