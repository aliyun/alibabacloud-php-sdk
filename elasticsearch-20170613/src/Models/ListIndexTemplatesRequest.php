<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListIndexTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $indexTemplate;
    protected $_name = [
        'indexTemplate' => 'indexTemplate',
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

        return $model;
    }
}
