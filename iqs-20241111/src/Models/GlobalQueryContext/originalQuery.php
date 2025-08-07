<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\GlobalQueryContext;

use AlibabaCloud\Dara\Model;

class originalQuery extends Model
{
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
        'page' => 'page',
        'query' => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
