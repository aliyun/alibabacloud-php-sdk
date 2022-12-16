<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListLogstashPluginsRequest extends Model
{
    /**
     * @example logstash-filter-clone
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $page;

    /**
     * @example 3
     *
     * @var int
     */
    public $size;

    /**
     * @example USER
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'name'   => 'name',
        'page'   => 'page',
        'size'   => 'size',
        'source' => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogstashPluginsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
