<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class LineageColumn extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnNativeType;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var bool
     */
    public $nullable;
    protected $_name = [
        'columnName' => 'columnName',
        'columnNativeType' => 'columnNativeType',
        'columnType' => 'columnType',
        'createdAt' => 'createdAt',
        'creator' => 'creator',
        'description' => 'description',
        'id' => 'id',
        'modifiedAt' => 'modifiedAt',
        'modifier' => 'modifier',
        'nullable' => 'nullable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['columnName'] = $this->columnName;
        }

        if (null !== $this->columnNativeType) {
            $res['columnNativeType'] = $this->columnNativeType;
        }

        if (null !== $this->columnType) {
            $res['columnType'] = $this->columnType;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->nullable) {
            $res['nullable'] = $this->nullable;
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
        if (isset($map['columnName'])) {
            $model->columnName = $map['columnName'];
        }

        if (isset($map['columnNativeType'])) {
            $model->columnNativeType = $map['columnNativeType'];
        }

        if (isset($map['columnType'])) {
            $model->columnType = $map['columnType'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['nullable'])) {
            $model->nullable = $map['nullable'];
        }

        return $model;
    }
}
