<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $composed;

    /**
     * @var content
     */
    public $content;

    /**
     * @example synthetics-settings
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'composed' => 'composed',
        'content'  => 'content',
        'name'     => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->composed) {
            $res['composed'] = $this->composed;
        }
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['composed'])) {
            if (!empty($map['composed'])) {
                $model->composed = $map['composed'];
            }
        }
        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
