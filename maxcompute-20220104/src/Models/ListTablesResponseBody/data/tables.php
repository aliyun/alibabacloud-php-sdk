<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
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
    public $schema;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'creationTime' => 'creationTime',
        'displayName'  => 'displayName',
        'name'         => 'name',
        'owner'        => 'owner',
        'schema'       => 'schema',
        'type'         => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
