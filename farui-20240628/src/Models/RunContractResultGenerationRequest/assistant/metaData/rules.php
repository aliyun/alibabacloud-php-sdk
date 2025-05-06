<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $ruleSequence;

    /**
     * @var string
     */
    public $ruleTag;

    /**
     * @var string
     */
    public $ruleTitle;
    protected $_name = [
        'riskLevel' => 'riskLevel',
        'ruleSequence' => 'ruleSequence',
        'ruleTag' => 'ruleTag',
        'ruleTitle' => 'ruleTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->ruleSequence) {
            $res['ruleSequence'] = $this->ruleSequence;
        }

        if (null !== $this->ruleTag) {
            $res['ruleTag'] = $this->ruleTag;
        }

        if (null !== $this->ruleTitle) {
            $res['ruleTitle'] = $this->ruleTitle;
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
        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['ruleSequence'])) {
            $model->ruleSequence = $map['ruleSequence'];
        }

        if (isset($map['ruleTag'])) {
            $model->ruleTag = $map['ruleTag'];
        }

        if (isset($map['ruleTitle'])) {
            $model->ruleTitle = $map['ruleTitle'];
        }

        return $model;
    }
}
