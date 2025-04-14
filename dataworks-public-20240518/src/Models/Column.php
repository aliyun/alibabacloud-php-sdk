<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Column\businessMetadata;

class Column extends Model
{
    /**
     * @var businessMetadata
     */
    public $businessMetadata;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $foreignKey;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $partitionKey;

    /**
     * @var int
     */
    public $position;

    /**
     * @var bool
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'businessMetadata' => 'BusinessMetadata',
        'comment' => 'Comment',
        'foreignKey' => 'ForeignKey',
        'id' => 'Id',
        'name' => 'Name',
        'partitionKey' => 'PartitionKey',
        'position' => 'Position',
        'primaryKey' => 'PrimaryKey',
        'tableId' => 'TableId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->businessMetadata) {
            $this->businessMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessMetadata) {
            $res['BusinessMetadata'] = null !== $this->businessMetadata ? $this->businessMetadata->toArray($noStream) : $this->businessMetadata;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->foreignKey) {
            $res['ForeignKey'] = $this->foreignKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionKey) {
            $res['PartitionKey'] = $this->partitionKey;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BusinessMetadata'])) {
            $model->businessMetadata = businessMetadata::fromMap($map['BusinessMetadata']);
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ForeignKey'])) {
            $model->foreignKey = $map['ForeignKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionKey'])) {
            $model->partitionKey = $map['PartitionKey'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
