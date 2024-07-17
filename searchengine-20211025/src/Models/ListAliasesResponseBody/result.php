<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAliasesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
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
    protected $_name = [
        'alias' => 'alias',
        'index' => 'index',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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

        return $model;
    }
}
