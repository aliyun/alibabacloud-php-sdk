<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest\content\semanticModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest\content\semanticModel\metrics\expression;

class metrics extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var expression
     */
    public $expression;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'description' => 'Description',
        'expression' => 'Expression',
        'name' => 'Name',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (null !== $this->expression) {
            $this->expression->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expression) {
            $res['Expression'] = null !== $this->expression ? $this->expression->toArray($noStream) : $this->expression;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Expression'])) {
            $model->expression = expression::fromMap($map['Expression']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
