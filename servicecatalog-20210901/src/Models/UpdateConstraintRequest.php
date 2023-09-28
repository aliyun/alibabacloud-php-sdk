<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateConstraintRequest extends Model
{
    /**
     * @description The configurations of the constraint.
     *
     * Format: { "LocalRoleName": "\<role_name>" }.
     * @example { "LocalRoleName": "TestRole" }
     *
     * @var string
     */
    public $config;

    /**
     * @description The ID of the constraint.
     *
     * @example cons-bp1yx7x42v****
     *
     * @var string
     */
    public $constraintId;

    /**
     * @description The description of the constraint.
     *
     * The value must be 1 to 128 characters in length.
     * @example Launch as local role TestRole
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'config'       => 'Config',
        'constraintId' => 'ConstraintId',
        'description'  => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->constraintId) {
            $res['ConstraintId'] = $this->constraintId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConstraintRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConstraintId'])) {
            $model->constraintId = $map['ConstraintId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
