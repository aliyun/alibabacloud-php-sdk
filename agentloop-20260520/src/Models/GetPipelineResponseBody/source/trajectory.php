<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\source\trajectory\enrich;

class trajectory extends Model
{
    /**
     * @var enrich
     */
    public $enrich;
    protected $_name = [
        'enrich' => 'enrich',
    ];

    public function validate()
    {
        if (null !== $this->enrich) {
            $this->enrich->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enrich) {
            $res['enrich'] = null !== $this->enrich ? $this->enrich->toArray($noStream) : $this->enrich;
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
        if (isset($map['enrich'])) {
            $model->enrich = enrich::fromMap($map['enrich']);
        }

        return $model;
    }
}
