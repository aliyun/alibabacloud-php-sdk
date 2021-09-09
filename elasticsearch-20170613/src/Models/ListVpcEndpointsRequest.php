<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListVpcEndpointsRequest extends Model
{
    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $page;
    protected $_name = [
        'size' => 'size',
        'page' => 'page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        return $model;
    }
}
