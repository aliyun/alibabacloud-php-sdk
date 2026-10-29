<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\FindCustomAgentImagePreparationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\FindCustomAgentImagePreparationResponseBody\data\error;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $failedPhase;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $preparationId;
    protected $_name = [
        'agentId' => 'agentId',
        'error' => 'error',
        'failedPhase' => 'failedPhase',
        'phase' => 'phase',
        'preparationId' => 'preparationId',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->failedPhase) {
            $res['failedPhase'] = $this->failedPhase;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->preparationId) {
            $res['preparationId'] = $this->preparationId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['failedPhase'])) {
            $model->failedPhase = $map['failedPhase'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['preparationId'])) {
            $model->preparationId = $map['preparationId'];
        }

        return $model;
    }
}
