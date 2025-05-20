<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class FullSchemaChange extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var FullDataType
     */
    public $dataType;

    /**
     * @var string[]
     */
    public $fieldNames;

    /**
     * @var bool
     */
    public $keepNullability;

    /**
     * @var string
     */
    public $key;

    /**
     * @var Move
     */
    public $move;

    /**
     * @var string
     */
    public $newComment;

    /**
     * @var FullDataType
     */
    public $newDataType;

    /**
     * @var string
     */
    public $newName;

    /**
     * @var bool
     */
    public $newNullability;

    /**
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

    public function validate()
    {
        if (null !== $this->dataType) {
            $this->dataType->validate();
        }
        if (\is_array($this->fieldNames)) {
            Model::validateArray($this->fieldNames);
        }
        if (null !== $this->move) {
            $this->move->validate();
        }
        if (null !== $this->newDataType) {
            $this->newDataType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = null !== $this->dataType ? $this->dataType->toArray($noStream) : $this->dataType;
        }

        if (null !== $this->fieldNames) {
            if (\is_array($this->fieldNames)) {
                $res['fieldNames'] = [];
                $n1 = 0;
                foreach ($this->fieldNames as $item1) {
                    $res['fieldNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keepNullability) {
            $res['keepNullability'] = $this->keepNullability;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->move) {
            $res['move'] = null !== $this->move ? $this->move->toArray($noStream) : $this->move;
        }

        if (null !== $this->newComment) {
            $res['newComment'] = $this->newComment;
        }

        if (null !== $this->newDataType) {
            $res['newDataType'] = null !== $this->newDataType ? $this->newDataType->toArray($noStream) : $this->newDataType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->fieldNames = [];
                $n1 = 0;
                foreach ($map['fieldNames'] as $item1) {
                    $model->fieldNames[$n1++] = $item1;
                }
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
