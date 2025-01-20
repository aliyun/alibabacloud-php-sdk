<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesRequest\resourceEvaluateItems;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $inputParameters;
    protected $_name = [
        'identifier'      => 'Identifier',
        'inputParameters' => 'InputParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->inputParameters) {
            $res['InputParameters'] = $this->inputParameters;
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
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['InputParameters'])) {
            $model->inputParameters = $map['InputParameters'];
        }

        return $model;
    }
}
