<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\Tea\Model;

class GenericSearchRequest extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @example OneWeek
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'query'     => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
    }

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
     * @return GenericSearchRequest
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
