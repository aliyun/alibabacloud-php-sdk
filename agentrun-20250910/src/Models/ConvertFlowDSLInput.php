<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLInput\dslSource;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLInput\options;

class ConvertFlowDSLInput extends Model
{
    /**
     * @var dslSource
     */
    public $dslSource;

    /**
     * @var options
     */
    public $options;
    protected $_name = [
        'dslSource' => 'dslSource',
        'options' => 'options',
    ];

    public function validate()
    {
        if (null !== $this->dslSource) {
            $this->dslSource->validate();
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dslSource) {
            $res['dslSource'] = null !== $this->dslSource ? $this->dslSource->toArray($noStream) : $this->dslSource;
        }

        if (null !== $this->options) {
            $res['options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
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
        if (isset($map['dslSource'])) {
            $model->dslSource = dslSource::fromMap($map['dslSource']);
        }

        if (isset($map['options'])) {
            $model->options = options::fromMap($map['options']);
        }

        return $model;
    }
}
