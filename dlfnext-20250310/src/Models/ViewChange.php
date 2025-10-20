<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ViewChange extends Model
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
     * @var string
     */
    public $dialect;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'action' => 'action',
        'comment' => 'comment',
        'dialect' => 'dialect',
        'key' => 'key',
        'query' => 'query',
        'value' => 'value',
    ];

    public function validate()
    {
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

        if (null !== $this->dialect) {
            $res['dialect'] = $this->dialect;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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

        if (isset($map['dialect'])) {
            $model->dialect = $map['dialect'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
