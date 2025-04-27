<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings\index;

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
        if (null !== $this->index) {
            $this->index->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = null !== $this->index ? $this->index->toArray($noStream) : $this->index;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index'])) {
            $model->index = index::fromMap($map['index']);
        }

        return $model;
    }
}
