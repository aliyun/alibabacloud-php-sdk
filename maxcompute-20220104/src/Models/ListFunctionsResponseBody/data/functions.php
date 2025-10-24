<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class functions extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'class' => 'class',
        'creationTime' => 'creationTime',
        'displayName' => 'displayName',
        'name' => 'name',
        'owner' => 'owner',
        'resources' => 'resources',
        'schema' => 'schema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
