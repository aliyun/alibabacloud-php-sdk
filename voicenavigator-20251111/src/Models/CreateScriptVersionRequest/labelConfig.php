<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateScriptVersionRequest;

use AlibabaCloud\Dara\Model;

class labelConfig extends Model
{
    /**
     * @var string[]
     */
    public $candidateValues;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'candidateValues' => 'CandidateValues',
        'description' => 'Description',
        'name' => 'Name',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
