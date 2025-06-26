<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList\answerValues\keywordValues;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList\answerValues\scoringRules;

class answerValues extends Model
{
    /**
     * @var string
     */
    public $answerName;

    /**
     * @var int
     */
    public $answerWeight;

    /**
     * @var keywordValues[]
     */
    public $keywordValues;

    /**
     * @var int
     */
    public $keywordWeight;

    /**
     * @var scoringRules[]
     */
    public $scoringRules;
    protected $_name = [
        'answerName' => 'answerName',
        'answerWeight' => 'answerWeight',
        'keywordValues' => 'keywordValues',
        'keywordWeight' => 'keywordWeight',
        'scoringRules' => 'scoringRules',
    ];

    public function validate()
    {
        if (\is_array($this->keywordValues)) {
            Model::validateArray($this->keywordValues);
        }
        if (\is_array($this->scoringRules)) {
            Model::validateArray($this->scoringRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerName) {
            $res['answerName'] = $this->answerName;
        }

        if (null !== $this->answerWeight) {
            $res['answerWeight'] = $this->answerWeight;
        }

        if (null !== $this->keywordValues) {
            if (\is_array($this->keywordValues)) {
                $res['keywordValues'] = [];
                $n1 = 0;
                foreach ($this->keywordValues as $item1) {
                    $res['keywordValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keywordWeight) {
            $res['keywordWeight'] = $this->keywordWeight;
        }

        if (null !== $this->scoringRules) {
            if (\is_array($this->scoringRules)) {
                $res['scoringRules'] = [];
                $n1 = 0;
                foreach ($this->scoringRules as $item1) {
                    $res['scoringRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['answerName'])) {
            $model->answerName = $map['answerName'];
        }

        if (isset($map['answerWeight'])) {
            $model->answerWeight = $map['answerWeight'];
        }

        if (isset($map['keywordValues'])) {
            if (!empty($map['keywordValues'])) {
                $model->keywordValues = [];
                $n1 = 0;
                foreach ($map['keywordValues'] as $item1) {
                    $model->keywordValues[$n1] = keywordValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['keywordWeight'])) {
            $model->keywordWeight = $map['keywordWeight'];
        }

        if (isset($map['scoringRules'])) {
            if (!empty($map['scoringRules'])) {
                $model->scoringRules = [];
                $n1 = 0;
                foreach ($map['scoringRules'] as $item1) {
                    $model->scoringRules[$n1] = scoringRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
