<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectBasicMetaRequest\properties;
use AlibabaCloud\Tea\Model;

class UpdateProjectBasicMetaRequest extends Model
{
    /**
     * @description The project description.
     *
     * @example BI_Analysis
     *
     * @var string
     */
    public $comment;

    /**
     * @description The basic properties of the project.
     *
     * @var properties
     */
    public $properties;
    protected $_name = [
        'comment' => 'comment',
        'properties' => 'properties',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->properties) {
            $res['properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectBasicMetaRequest
     */
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
