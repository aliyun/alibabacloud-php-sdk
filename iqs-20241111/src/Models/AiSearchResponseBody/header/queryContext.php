<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header;

use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header\queryContext\originalQuery;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponseBody\header\queryContext\rewrite;
use AlibabaCloud\Tea\Model;

class queryContext extends Model
{
    /**
     * @var originalQuery
     */
    public $originalQuery;

    /**
     * @var rewrite
     */
    public $rewrite;
    protected $_name = [
        'originalQuery' => 'originalQuery',
        'rewrite' => 'rewrite',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return queryContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['originalQuery'])) {
            $model->originalQuery = originalQuery::fromMap($map['originalQuery']);
        }
        if (isset($map['rewrite'])) {
            $model->rewrite = rewrite::fromMap($map['rewrite']);
        }

        return $model;
    }
}
