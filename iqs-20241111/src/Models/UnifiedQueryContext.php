<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class UnifiedQueryContext extends Model
{
    /**
     * @var string
     */
    public $engineType;

    /**
     * @var UnifiedOriginalQuery
     */
    public $originalQuery;

    /**
     * @var UnifiedRewrite
     */
    public $rewrite;
    protected $_name = [
        'engineType' => 'engineType',
        'originalQuery' => 'originalQuery',
        'rewrite' => 'rewrite',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }
        if (null !== $this->originalQuery) {
            $res['originalQuery'] = null !== $this->originalQuery ? $this->originalQuery->toMap() : null;
        }
        if (null !== $this->rewrite) {
            $res['rewrite'] = null !== $this->rewrite ? $this->rewrite->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnifiedQueryContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }
        if (isset($map['originalQuery'])) {
            $model->originalQuery = UnifiedOriginalQuery::fromMap($map['originalQuery']);
        }
        if (isset($map['rewrite'])) {
            $model->rewrite = UnifiedRewrite::fromMap($map['rewrite']);
        }

        return $model;
    }
}
