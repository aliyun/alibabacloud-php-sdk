<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetQueryOptimizeSolutionRequest extends Model
{
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $ruleIds;
    /**
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'ruleIds'    => 'RuleIds',
        'sqlId'      => 'SqlId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        return $model;
    }
}
