<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetSheetResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $columnCount;

    /**
     * @example stxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $lastNonEmptyColumn;

    /**
     * @example 2
     *
     * @var int
     */
    public $lastNonEmptyRow;

    /**
     * @example Sheet1
     *
     * @var string
     */
    public $name;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $rowCount;

    /**
     * @example visible
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetSheetResponseBody
     */
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
