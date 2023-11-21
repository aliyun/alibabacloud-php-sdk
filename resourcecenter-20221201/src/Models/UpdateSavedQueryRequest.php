<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class UpdateSavedQueryRequest extends Model
{
    /**
     * @description The description of the template.
     *
     * The description must be 1 to 256 characters in length.
     * @var string
     */
    public $description;

    /**
     * @description The query statement in the template.
     *
     * @example SELECT * FROM resources;
     *
     * @var string
     */
    public $expression;

    /**
     * @description The name of the template.
     *
     *   The name must be 1 to 64 characters in length.
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must be unique.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the template.
     *
     * @example sq-GeAck****
     *
     * @var string
     */
    public $queryId;
    protected $_name = [
        'description' => 'Description',
        'expression'  => 'Expression',
        'name'        => 'Name',
        'queryId'     => 'QueryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSavedQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
