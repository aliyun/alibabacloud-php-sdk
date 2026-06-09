<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class UpdateTableShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addColumnShrink;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deleteColumnShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $renameColumnShrink;

    /**
     * @var string
     */
    public $updateColumnCommentShrink;

    /**
     * @var string
     */
    public $updateColumnTypeShrink;

    /**
     * @var string
     */
    public $updateComment;

    /**
     * @var string
     */
    public $updateRetentionPolicyShrink;
    protected $_name = [
        'addColumnShrink' => 'AddColumn',
        'catalog' => 'Catalog',
        'clientToken' => 'ClientToken',
        'deleteColumnShrink' => 'DeleteColumn',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'renameColumnShrink' => 'RenameColumn',
        'updateColumnCommentShrink' => 'UpdateColumnComment',
        'updateColumnTypeShrink' => 'UpdateColumnType',
        'updateComment' => 'UpdateComment',
        'updateRetentionPolicyShrink' => 'UpdateRetentionPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addColumnShrink) {
            $res['AddColumn'] = $this->addColumnShrink;
        }

        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deleteColumnShrink) {
            $res['DeleteColumn'] = $this->deleteColumnShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->renameColumnShrink) {
            $res['RenameColumn'] = $this->renameColumnShrink;
        }

        if (null !== $this->updateColumnCommentShrink) {
            $res['UpdateColumnComment'] = $this->updateColumnCommentShrink;
        }

        if (null !== $this->updateColumnTypeShrink) {
            $res['UpdateColumnType'] = $this->updateColumnTypeShrink;
        }

        if (null !== $this->updateComment) {
            $res['UpdateComment'] = $this->updateComment;
        }

        if (null !== $this->updateRetentionPolicyShrink) {
            $res['UpdateRetentionPolicy'] = $this->updateRetentionPolicyShrink;
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
            $model->addColumnShrink = $map['AddColumn'];
        }

        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeleteColumn'])) {
            $model->deleteColumnShrink = $map['DeleteColumn'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RenameColumn'])) {
            $model->renameColumnShrink = $map['RenameColumn'];
        }

        if (isset($map['UpdateColumnComment'])) {
            $model->updateColumnCommentShrink = $map['UpdateColumnComment'];
        }

        if (isset($map['UpdateColumnType'])) {
            $model->updateColumnTypeShrink = $map['UpdateColumnType'];
        }

        if (isset($map['UpdateComment'])) {
            $model->updateComment = $map['UpdateComment'];
        }

        if (isset($map['UpdateRetentionPolicy'])) {
            $model->updateRetentionPolicyShrink = $map['UpdateRetentionPolicy'];
        }

        return $model;
    }
}
