<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template;
use AlibabaCloud\Tea\Model;

class content extends Model
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

    /**
     * @example 0
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'meta'     => '_meta',
        'template' => 'template',
        'version'  => 'version',
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
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
