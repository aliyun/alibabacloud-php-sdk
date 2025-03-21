<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Tea\Model;

class GetWebSearchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $way;
    protected $_name = [
        'query' => 'query',
        'topK' => 'top_k',
        'way' => 'way',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->topK) {
            $res['top_k'] = $this->topK;
        }
        if (null !== $this->way) {
            $res['way'] = $this->way;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['top_k'])) {
            $model->topK = $map['top_k'];
        }
        if (isset($map['way'])) {
            $model->way = $map['way'];
        }

        return $model;
    }
}
