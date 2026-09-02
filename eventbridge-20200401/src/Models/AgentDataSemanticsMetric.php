<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AgentDataSemanticsMetric extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $SQLExpression;

    /**
     * @var string[]
     */
    public $synonyms;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'SQLExpression' => 'SQLExpression',
        'synonyms' => 'Synonyms',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->synonyms)) {
            Model::validateArray($this->synonyms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->SQLExpression) {
            $res['SQLExpression'] = $this->SQLExpression;
        }

        if (null !== $this->synonyms) {
            if (\is_array($this->synonyms)) {
                $res['Synonyms'] = [];
                $n1 = 0;
                foreach ($this->synonyms as $item1) {
                    $res['Synonyms'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SQLExpression'])) {
            $model->SQLExpression = $map['SQLExpression'];
        }

        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = [];
                $n1 = 0;
                foreach ($map['Synonyms'] as $item1) {
                    $model->synonyms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
