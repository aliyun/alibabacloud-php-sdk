<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\addColumn;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\deleteColumn;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\renameColumn;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\updateColumnComment;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\updateColumnType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest\updateRetentionPolicy;

class UpdateTableRequest extends Model
{
    /**
     * @var addColumn
     */
    public $addColumn;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var deleteColumn
     */
    public $deleteColumn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var renameColumn
     */
    public $renameColumn;

    /**
     * @var updateColumnComment
     */
    public $updateColumnComment;

    /**
     * @var updateColumnType
     */
    public $updateColumnType;

    /**
     * @var string
     */
    public $updateComment;

    /**
     * @var updateRetentionPolicy
     */
    public $updateRetentionPolicy;
    protected $_name = [
        'addColumn' => 'AddColumn',
        'catalog' => 'Catalog',
        'clientToken' => 'ClientToken',
        'deleteColumn' => 'DeleteColumn',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'renameColumn' => 'RenameColumn',
        'updateColumnComment' => 'UpdateColumnComment',
        'updateColumnType' => 'UpdateColumnType',
        'updateComment' => 'UpdateComment',
        'updateRetentionPolicy' => 'UpdateRetentionPolicy',
    ];

    public function validate()
    {
        if (null !== $this->addColumn) {
            $this->addColumn->validate();
        }
        if (null !== $this->deleteColumn) {
            $this->deleteColumn->validate();
        }
        if (null !== $this->renameColumn) {
            $this->renameColumn->validate();
        }
        if (null !== $this->updateColumnComment) {
            $this->updateColumnComment->validate();
        }
        if (null !== $this->updateColumnType) {
            $this->updateColumnType->validate();
        }
        if (null !== $this->updateRetentionPolicy) {
            $this->updateRetentionPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addColumn) {
            $res['AddColumn'] = null !== $this->addColumn ? $this->addColumn->toArray($noStream) : $this->addColumn;
        }

        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deleteColumn) {
            $res['DeleteColumn'] = null !== $this->deleteColumn ? $this->deleteColumn->toArray($noStream) : $this->deleteColumn;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->renameColumn) {
            $res['RenameColumn'] = null !== $this->renameColumn ? $this->renameColumn->toArray($noStream) : $this->renameColumn;
        }

        if (null !== $this->updateColumnComment) {
            $res['UpdateColumnComment'] = null !== $this->updateColumnComment ? $this->updateColumnComment->toArray($noStream) : $this->updateColumnComment;
        }

        if (null !== $this->updateColumnType) {
            $res['UpdateColumnType'] = null !== $this->updateColumnType ? $this->updateColumnType->toArray($noStream) : $this->updateColumnType;
        }

        if (null !== $this->updateComment) {
            $res['UpdateComment'] = $this->updateComment;
        }

        if (null !== $this->updateRetentionPolicy) {
            $res['UpdateRetentionPolicy'] = null !== $this->updateRetentionPolicy ? $this->updateRetentionPolicy->toArray($noStream) : $this->updateRetentionPolicy;
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
        if (isset($map['AddColumn'])) {
            $model->addColumn = addColumn::fromMap($map['AddColumn']);
        }

        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeleteColumn'])) {
            $model->deleteColumn = deleteColumn::fromMap($map['DeleteColumn']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RenameColumn'])) {
            $model->renameColumn = renameColumn::fromMap($map['RenameColumn']);
        }

        if (isset($map['UpdateColumnComment'])) {
            $model->updateColumnComment = updateColumnComment::fromMap($map['UpdateColumnComment']);
        }

        if (isset($map['UpdateColumnType'])) {
            $model->updateColumnType = updateColumnType::fromMap($map['UpdateColumnType']);
        }

        if (isset($map['UpdateComment'])) {
            $model->updateComment = $map['UpdateComment'];
        }

        if (isset($map['UpdateRetentionPolicy'])) {
            $model->updateRetentionPolicy = updateRetentionPolicy::fromMap($map['UpdateRetentionPolicy']);
        }

        return $model;
    }
}
