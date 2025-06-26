<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_\customReplyRules\action\parameters;

class action extends Model
{
    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'parameters' => 'parameters',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
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
        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
