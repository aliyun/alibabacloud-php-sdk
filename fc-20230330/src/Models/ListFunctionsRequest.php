<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionsRequest extends Model
{
    /**
     * @description The version of Function Compute to which the functions belong. Valid values: v3 and v2. v3: only lists functions of Function Compute 3.0. v2: only lists functions of Function Compute 2.0. By default, this parameter is left empty and functions in both Function Compute 3.0 and Function Compute 2.0 are listed.
     *
     * @example v3
     *
     * @var string
     */
    public $fcVersion;

    /**
     * @description The number of functions to return. The minimum value is 1 and the maximum value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token.
     *
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The prefix of the function name.
     *
     * @example my-func
     *
     * @var string
     */
    public $prefix;

    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'fcVersion' => 'fcVersion',
        'limit' => 'limit',
        'nextToken' => 'nextToken',
        'prefix' => 'prefix',
        'tags' => 'tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcVersion) {
            $res['fcVersion'] = $this->fcVersion;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fcVersion'])) {
            $model->fcVersion = $map['fcVersion'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
