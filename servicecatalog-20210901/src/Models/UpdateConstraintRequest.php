<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class UpdateConstraintRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $constraintId;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'config' => 'Config',
        'constraintId' => 'ConstraintId',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
