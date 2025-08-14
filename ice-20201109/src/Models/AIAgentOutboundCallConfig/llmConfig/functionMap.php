<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\llmConfig;

use AlibabaCloud\Dara\Model;

class functionMap extends Model
{
    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $matchFunction;
    protected $_name = [
        'function' => 'Function',
        'matchFunction' => 'MatchFunction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }

        if (null !== $this->matchFunction) {
            $res['MatchFunction'] = $this->matchFunction;
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
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        if (isset($map['MatchFunction'])) {
            $model->matchFunction = $map['MatchFunction'];
        }

        return $model;
    }
}
