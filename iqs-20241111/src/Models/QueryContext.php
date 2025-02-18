<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241111\Models\QueryContext\originalQuery;
use AlibabaCloud\SDK\IQS\V20241111\Models\QueryContext\rewrite;

class QueryContext extends Model
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
        'rewrite'       => 'rewrite',
    ];

    public function validate()
    {
        if (null !== $this->originalQuery) {
            $this->originalQuery->validate();
        }
        if (null !== $this->rewrite) {
            $this->rewrite->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalQuery) {
            $res['originalQuery'] = null !== $this->originalQuery ? $this->originalQuery->toArray($noStream) : $this->originalQuery;
        }

        if (null !== $this->rewrite) {
            $res['rewrite'] = null !== $this->rewrite ? $this->rewrite->toArray($noStream) : $this->rewrite;
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
        if (isset($map['originalQuery'])) {
            $model->originalQuery = originalQuery::fromMap($map['originalQuery']);
        }

        if (isset($map['rewrite'])) {
            $model->rewrite = rewrite::fromMap($map['rewrite']);
        }

        return $model;
    }
}
