<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetSheetResponseBody extends Model
{
    /**
     * @var int
     */
    public $columnCount;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $lastNonEmptyColumn;
    /**
     * @var int
     */
    public $lastNonEmptyRow;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $rowCount;
    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'columnCount'        => 'columnCount',
        'id'                 => 'id',
        'lastNonEmptyColumn' => 'lastNonEmptyColumn',
        'lastNonEmptyRow'    => 'lastNonEmptyRow',
        'name'               => 'name',
        'requestId'          => 'requestId',
        'rowCount'           => 'rowCount',
        'visibility'         => 'visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnCount) {
            $res['columnCount'] = $this->columnCount;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->lastNonEmptyColumn) {
            $res['lastNonEmptyColumn'] = $this->lastNonEmptyColumn;
        }

        if (null !== $this->lastNonEmptyRow) {
            $res['lastNonEmptyRow'] = $this->lastNonEmptyRow;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rowCount) {
            $res['rowCount'] = $this->rowCount;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
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
        if (isset($map['columnCount'])) {
            $model->columnCount = $map['columnCount'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['lastNonEmptyColumn'])) {
            $model->lastNonEmptyColumn = $map['lastNonEmptyColumn'];
        }

        if (isset($map['lastNonEmptyRow'])) {
            $model->lastNonEmptyRow = $map['lastNonEmptyRow'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rowCount'])) {
            $model->rowCount = $map['rowCount'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        return $model;
    }
}
