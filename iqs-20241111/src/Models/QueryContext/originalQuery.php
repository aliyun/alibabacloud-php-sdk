<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\QueryContext;

use AlibabaCloud\Tea\Model;

class originalQuery extends Model
{
    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'industry' => 'industry',
        'page' => 'page',
        'query' => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
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
     * @return originalQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
