<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexResponseBody\result\template;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example { "description": "set number of shards to one" }
     *
     * @var mixed[]
     */
    public $meta;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'meta'     => '_meta',
        'template' => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['_meta'] = $this->meta;
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['_meta'])) {
            $model->meta = $map['_meta'];
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
