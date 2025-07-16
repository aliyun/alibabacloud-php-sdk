<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class FullSchemaChange extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @description required in UpdateComment/AddColumn
     *
     * @var string
     */
    public $comment;

    /**
     * @var FullDataType
     */
    public $dataType;

    /**
     * @description required in AddColumn/RenameColumn/DropColumn/UpdateColumnComment/UpdateColumnType/UpdateColumnNullability
     *
     * @var string[]
     */
    public $fieldNames;

    /**
     * @description required in UpdateColumnType
     *
     * @var bool
     */
    public $keepNullability;

    /**
     * @description required in SetOption/RemoveOption
     *
     * @var string
     */
    public $key;

    /**
     * @var Move
     */
    public $move;

    /**
     * @description required in UpdateColumnComment
     *
     * @var string
     */
    public $newComment;

    /**
     * @var FullDataType
     */
    public $newDataType;

    /**
     * @description required in RenameColumn
     *
     * @var string
     */
    public $newName;

    /**
     * @description required in UpdateColumnNullability
     *
     * @var bool
     */
    public $newNullability;

    /**
     * @description required in SetOption
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'action' => 'action',
        'comment' => 'comment',
        'dataType' => 'dataType',
        'fieldNames' => 'fieldNames',
        'keepNullability' => 'keepNullability',
        'key' => 'key',
        'move' => 'move',
        'newComment' => 'newComment',
        'newDataType' => 'newDataType',
        'newName' => 'newName',
        'newNullability' => 'newNullability',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->dataType) {
            $res['dataType'] = null !== $this->dataType ? $this->dataType->toMap() : null;
        }
        if (null !== $this->fieldNames) {
            $res['fieldNames'] = $this->fieldNames;
        }
        if (null !== $this->keepNullability) {
            $res['keepNullability'] = $this->keepNullability;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->move) {
            $res['move'] = null !== $this->move ? $this->move->toMap() : null;
        }
        if (null !== $this->newComment) {
            $res['newComment'] = $this->newComment;
        }
        if (null !== $this->newDataType) {
            $res['newDataType'] = null !== $this->newDataType ? $this->newDataType->toMap() : null;
        }
        if (null !== $this->newName) {
            $res['newName'] = $this->newName;
        }
        if (null !== $this->newNullability) {
            $res['newNullability'] = $this->newNullability;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FullSchemaChange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['dataType'])) {
            $model->dataType = FullDataType::fromMap($map['dataType']);
        }
        if (isset($map['fieldNames'])) {
            if (!empty($map['fieldNames'])) {
                $model->fieldNames = $map['fieldNames'];
            }
        }
        if (isset($map['keepNullability'])) {
            $model->keepNullability = $map['keepNullability'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['move'])) {
            $model->move = Move::fromMap($map['move']);
        }
        if (isset($map['newComment'])) {
            $model->newComment = $map['newComment'];
        }
        if (isset($map['newDataType'])) {
            $model->newDataType = FullDataType::fromMap($map['newDataType']);
        }
        if (isset($map['newName'])) {
            $model->newName = $map['newName'];
        }
        if (isset($map['newNullability'])) {
            $model->newNullability = $map['newNullability'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
