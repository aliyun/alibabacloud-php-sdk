<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The time when the resource was created.
     *
     * @example 2022-01-29T03:34:09Z
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The name of the resource.
     *
     * @example res_1
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the resource.
     *
     * @example 1265860483008101
     *
     * @var string
     */
    public $owner;

    /**
     * @description The schema of the resource.
     *
     * @example schemaA
     *
     * @var string
     */
    public $schema;

    /**
     * @description The type of the resource.
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'creationTime' => 'creationTime',
        'name'         => 'name',
        'owner'        => 'owner',
        'schema'       => 'schema',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
