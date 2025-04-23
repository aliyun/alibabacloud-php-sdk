<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class CreateAliasRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $index;

    /**
     * @var bool
     */
    public $newMode;
    protected $_name = [
        'alias' => 'alias',
        'index' => 'index',
        'newMode' => 'newMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }

        return $model;
    }
}
