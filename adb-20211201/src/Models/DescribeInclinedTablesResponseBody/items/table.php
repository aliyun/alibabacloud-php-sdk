<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedTablesResponseBody\items;

use AlibabaCloud\Dara\Model;

class table extends Model
{
    /**
     * @var bool
     */
    public $isIncline;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $size;

    /**
     * @var float
     */
    public $spaceRatio;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isIncline' => 'IsIncline',
        'name' => 'Name',
        'rowCount' => 'RowCount',
        'schema' => 'Schema',
        'size' => 'Size',
        'spaceRatio' => 'SpaceRatio',
        'totalSize' => 'TotalSize',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isIncline) {
            $res['IsIncline'] = $this->isIncline;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->spaceRatio) {
            $res['SpaceRatio'] = $this->spaceRatio;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['IsIncline'])) {
            $model->isIncline = $map['IsIncline'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SpaceRatio'])) {
            $model->spaceRatio = $map['SpaceRatio'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
