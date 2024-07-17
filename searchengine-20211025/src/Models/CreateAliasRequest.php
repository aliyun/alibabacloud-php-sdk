<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class CreateAliasRequest extends Model
{
    /**
     * @description alias name
     *
     * @example test
     *
     * @var string
     */
    public $alias;

    /**
     * @description index name
     *
     * @example index
     *
     * @var string
     */
    public $index;

    /**
     * @description Specifies whether the OpenSearch Vector Search Edition instance is of the new version.
     *
     * @example true
     *
     * @var bool
     */
    public $newMode;
    protected $_name = [
        'alias'   => 'alias',
        'index'   => 'index',
        'newMode' => 'newMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateAliasRequest
     */
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
