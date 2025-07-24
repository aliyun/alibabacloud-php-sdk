<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class UnifiedOriginalQuery extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'query' => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->timeRange) {
            $res['timeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnifiedOriginalQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
