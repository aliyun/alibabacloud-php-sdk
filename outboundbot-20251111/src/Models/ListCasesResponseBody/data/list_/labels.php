<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListCasesResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string[]
     */
    public $candidateValues;

    /**
     * @var bool
     */
    public $collected;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $matchedValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $system;
    protected $_name = [
        'candidateValues' => 'CandidateValues',
        'collected' => 'Collected',
        'description' => 'Description',
        'matchedValue' => 'MatchedValue',
        'name' => 'Name',
        'system' => 'System',
    ];

    public function validate()
    {
        if (\is_array($this->candidateValues)) {
            Model::validateArray($this->candidateValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidateValues) {
            if (\is_array($this->candidateValues)) {
                $res['CandidateValues'] = [];
                $n1 = 0;
                foreach ($this->candidateValues as $item1) {
                    $res['CandidateValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collected) {
            $res['Collected'] = $this->collected;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->matchedValue) {
            $res['MatchedValue'] = $this->matchedValue;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->system) {
            $res['System'] = $this->system;
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
        if (isset($map['CandidateValues'])) {
            if (!empty($map['CandidateValues'])) {
                $model->candidateValues = [];
                $n1 = 0;
                foreach ($map['CandidateValues'] as $item1) {
                    $model->candidateValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Collected'])) {
            $model->collected = $map['Collected'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MatchedValue'])) {
            $model->matchedValue = $map['MatchedValue'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['System'])) {
            $model->system = $map['System'];
        }

        return $model;
    }
}
