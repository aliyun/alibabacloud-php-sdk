<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class UnifiedSearchInput extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var RequestContents
     */
    public $contents;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'category' => 'category',
        'contents' => 'contents',
        'engineType' => 'engineType',
        'location' => 'location',
        'query' => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (null !== $this->contents) {
            $this->contents->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->contents) {
            $res['contents'] = null !== $this->contents ? $this->contents->toArray($noStream) : $this->contents;
        }

        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['contents'])) {
            $model->contents = RequestContents::fromMap($map['contents']);
        }

        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
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
