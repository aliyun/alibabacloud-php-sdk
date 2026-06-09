<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class CreateTableShrinkRequest extends Model
{
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
    public $columnsShrink;

    /**
     * @var string
     */
    public $comment;

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
    public $retentionPolicyShrink;
    protected $_name = [
        'catalog' => 'Catalog',
        'clientToken' => 'ClientToken',
        'columnsShrink' => 'Columns',
        'comment' => 'Comment',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'retentionPolicyShrink' => 'RetentionPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->columnsShrink) {
            $res['Columns'] = $this->columnsShrink;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->retentionPolicyShrink) {
            $res['RetentionPolicy'] = $this->retentionPolicyShrink;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Columns'])) {
            $model->columnsShrink = $map['Columns'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RetentionPolicy'])) {
            $model->retentionPolicyShrink = $map['RetentionPolicy'];
        }

        return $model;
    }
}
