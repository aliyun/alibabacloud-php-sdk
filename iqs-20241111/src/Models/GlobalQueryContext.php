<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalQueryContext\originalQuery;
use AlibabaCloud\Tea\Model;

class GlobalQueryContext extends Model
{
    /**
     * @var originalQuery
     */
    public $originalQuery;
    protected $_name = [
        'originalQuery' => 'originalQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalQuery) {
            $res['originalQuery'] = null !== $this->originalQuery ? $this->originalQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GlobalQueryContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['originalQuery'])) {
            $model->originalQuery = originalQuery::fromMap($map['originalQuery']);
        }

        return $model;
    }
}
