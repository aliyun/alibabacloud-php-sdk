<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class functions extends Model
{
    /**
     * @description The class in which the function was defined.
     *
     * @example abc
     *
     * @var string
     */
    public $class;

    /**
     * @description The time when the function was created. Unit: milliseconds.
     *
     * @example 1664505167000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The display name of the function.
     *
     * @example getdate
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the function.
     *
     * @example getdate
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the function.
     *
     * @example odpsowner
     *
     * @var string
     */
    public $owner;

    /**
     * @description The name of the resource that was associated with the function.
     *
     * @example abc
     *
     * @var string
     */
    public $resources;

    /**
     * @description The schema of the function.
     *
     * @example abc
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'class'        => 'class',
        'creationTime' => 'creationTime',
        'displayName'  => 'displayName',
        'name'         => 'name',
        'owner'        => 'owner',
        'resources'    => 'resources',
        'schema'       => 'schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['class'] = $this->class;
        }
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['class'])) {
            $model->class = $map['class'];
        }
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        return $model;
    }
}
