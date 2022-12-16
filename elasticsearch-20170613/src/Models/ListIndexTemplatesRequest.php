<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListIndexTemplatesRequest extends Model
{
    /**
     * @example my-template
     *
     * @var string
     */
    public $indexTemplate;

    /**
     * @example 5
     *
     * @var int
     */
    public $page;

    /**
     * @example 50
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'indexTemplate' => 'indexTemplate',
        'page'          => 'page',
        'size'          => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexTemplate) {
            $res['indexTemplate'] = $this->indexTemplate;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndexTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexTemplate'])) {
            $model->indexTemplate = $map['indexTemplate'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
