<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskRequest;

use AlibabaCloud\Dara\Model;

class customTerms extends Model
{
    /**
     * @var string
     */
    public $sourceTerm;

    /**
     * @var string
     */
    public $targetTerm;
    protected $_name = [
        'sourceTerm' => 'SourceTerm',
        'targetTerm' => 'TargetTerm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceTerm) {
            $res['SourceTerm'] = $this->sourceTerm;
        }

        if (null !== $this->targetTerm) {
            $res['TargetTerm'] = $this->targetTerm;
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
        if (isset($map['SourceTerm'])) {
            $model->sourceTerm = $map['SourceTerm'];
        }

        if (isset($map['TargetTerm'])) {
            $model->targetTerm = $map['TargetTerm'];
        }

        return $model;
    }
}
