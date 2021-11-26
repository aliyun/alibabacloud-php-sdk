<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings\index;
use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @var index
     */
    public $index;
    protected $_name = [
        'index' => 'index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = null !== $this->index ? $this->index->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index'])) {
            $model->index = index::fromMap($map['index']);
        }

        return $model;
    }
}
