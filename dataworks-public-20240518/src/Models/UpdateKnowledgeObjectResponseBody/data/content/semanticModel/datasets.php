<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectResponseBody\data\content\semanticModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectResponseBody\data\content\semanticModel\datasets\fields;

class datasets extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $primaryKey;
    protected $_name = [
        'description' => 'Description',
        'entityId' => 'EntityId',
        'fields' => 'Fields',
        'name' => 'Name',
        'primaryKey' => 'PrimaryKey',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->primaryKey)) {
            Model::validateArray($this->primaryKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->primaryKey) {
            if (\is_array($this->primaryKey)) {
                $res['PrimaryKey'] = [];
                $n1 = 0;
                foreach ($this->primaryKey as $item1) {
                    $res['PrimaryKey'][$n1] = $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = fields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PrimaryKey'])) {
            if (!empty($map['PrimaryKey'])) {
                $model->primaryKey = [];
                $n1 = 0;
                foreach ($map['PrimaryKey'] as $item1) {
                    $model->primaryKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
