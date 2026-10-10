<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\trajectory;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $agentNames;

    /**
     * @var bool
     */
    public $excludeDegraded;

    /**
     * @var int
     */
    public $minStepCount;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $serviceNames;
    protected $_name = [
        'agentNames' => 'agentNames',
        'excludeDegraded' => 'excludeDegraded',
        'minStepCount' => 'minStepCount',
        'query' => 'query',
        'serviceNames' => 'serviceNames',
    ];

    public function validate()
    {
        if (\is_array($this->agentNames)) {
            Model::validateArray($this->agentNames);
        }
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentNames) {
            if (\is_array($this->agentNames)) {
                $res['agentNames'] = [];
                $n1 = 0;
                foreach ($this->agentNames as $item1) {
                    $res['agentNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeDegraded) {
            $res['excludeDegraded'] = $this->excludeDegraded;
        }

        if (null !== $this->minStepCount) {
            $res['minStepCount'] = $this->minStepCount;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['serviceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['serviceNames'][$n1] = $item1;
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
        if (isset($map['agentNames'])) {
            if (!empty($map['agentNames'])) {
                $model->agentNames = [];
                $n1 = 0;
                foreach ($map['agentNames'] as $item1) {
                    $model->agentNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['excludeDegraded'])) {
            $model->excludeDegraded = $map['excludeDegraded'];
        }

        if (isset($map['minStepCount'])) {
            $model->minStepCount = $map['minStepCount'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['serviceNames'])) {
            if (!empty($map['serviceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['serviceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
