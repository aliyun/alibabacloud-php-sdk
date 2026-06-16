<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdatePipelineRequest\sink;

use AlibabaCloud\Dara\Model;

class dataset extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $dataset;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'dataset' => 'dataset',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->dataset) {
            $res['dataset'] = $this->dataset;
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
            $model->dataset = $map['dataset'];
        }

        return $model;
    }
}
