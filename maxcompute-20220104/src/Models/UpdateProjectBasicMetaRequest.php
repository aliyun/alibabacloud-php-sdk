<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties;

class UpdateProjectBasicMetaRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'comment' => 'comment',
        'properties' => 'properties',
    ];

    public function validate()
    {
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['properties'])) {
            $model->properties = properties::fromMap($map['properties']);
        }

        return $model;
    }
}
