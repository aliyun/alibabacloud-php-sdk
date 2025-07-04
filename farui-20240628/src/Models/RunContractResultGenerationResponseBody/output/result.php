<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output\result\subRisks;

class result extends Model
{
    /**
     * @var string
     */
    public $examineBrief;

    /**
     * @var string
     */
    public $examineResult;

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

    /**
     * @var subRisks[]
     */
    public $subRisks;
    protected $_name = [
        'examineBrief' => 'examineBrief',
        'examineResult' => 'examineResult',
        'riskLevel' => 'riskLevel',
        'ruleSequence' => 'ruleSequence',
        'ruleTag' => 'ruleTag',
        'ruleTitle' => 'ruleTitle',
        'subRisks' => 'subRisks',
    ];

    public function validate()
    {
        if (\is_array($this->subRisks)) {
            Model::validateArray($this->subRisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->examineBrief) {
            $res['examineBrief'] = $this->examineBrief;
        }

        if (null !== $this->examineResult) {
            $res['examineResult'] = $this->examineResult;
        }

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

        if (null !== $this->subRisks) {
            if (\is_array($this->subRisks)) {
                $res['subRisks'] = [];
                $n1 = 0;
                foreach ($this->subRisks as $item1) {
                    $res['subRisks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['examineBrief'])) {
            $model->examineBrief = $map['examineBrief'];
        }

        if (isset($map['examineResult'])) {
            $model->examineResult = $map['examineResult'];
        }

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

        if (isset($map['subRisks'])) {
            if (!empty($map['subRisks'])) {
                $model->subRisks = [];
                $n1 = 0;
                foreach ($map['subRisks'] as $item1) {
                    $model->subRisks[$n1] = subRisks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
