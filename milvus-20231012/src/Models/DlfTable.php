<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class DlfTable extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $tableFormat;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'description' => 'description',
        'location' => 'location',
        'tableFormat' => 'tableFormat',
        'tableName' => 'tableName',
        'tableType' => 'tableType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->tableFormat) {
            $res['tableFormat'] = $this->tableFormat;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->tableType) {
            $res['tableType'] = $this->tableType;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['tableFormat'])) {
            $model->tableFormat = $map['tableFormat'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['tableType'])) {
            $model->tableType = $map['tableType'];
        }

        return $model;
    }
}
