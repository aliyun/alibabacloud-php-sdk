<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListPluginsRequest extends Model
{
    /**
     * @description SYSTEM
     *
     * @example analysis-ik
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var string
     */
    public $page;

    /**
     * @description The header of the response.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The total number of entries returned.
     *
     * @example SYSTEM
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
     * @return ListPluginsRequest
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
