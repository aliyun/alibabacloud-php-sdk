<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CredentialListItem extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var RelatedWorkload[]
     */
    public $relatedWorloads;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'id' => 'id',
        'name' => 'name',
        'relatedWorloads' => 'relatedWorloads',
        'type' => 'type',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->relatedWorloads)) {
            Model::validateArray($this->relatedWorloads);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->relatedWorloads) {
            if (\is_array($this->relatedWorloads)) {
                $res['relatedWorloads'] = [];
                $n1 = 0;
                foreach ($this->relatedWorloads as $item1) {
                    $res['relatedWorloads'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['relatedWorloads'])) {
            if (!empty($map['relatedWorloads'])) {
                $model->relatedWorloads = [];
                $n1 = 0;
                foreach ($map['relatedWorloads'] as $item1) {
                    $model->relatedWorloads[$n1] = RelatedWorkload::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
