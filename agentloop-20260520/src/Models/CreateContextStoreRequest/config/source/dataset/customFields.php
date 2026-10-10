<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset;

use AlibabaCloud\Dara\Model;

class customFields extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $sourceField;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'description' => 'description',
        'sensitive' => 'sensitive',
        'sourceField' => 'sourceField',
        'target' => 'target',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }

        if (null !== $this->sourceField) {
            $res['sourceField'] = $this->sourceField;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        if (isset($map['sourceField'])) {
            $model->sourceField = $map['sourceField'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
