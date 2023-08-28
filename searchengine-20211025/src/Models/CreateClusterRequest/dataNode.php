<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class dataNode extends Model
{
    /**
     * @description The number of Searcher workers.
     *
     * @example 2
     *
     * @var int
     */
    public $number;
    protected $_name = [
        'number' => 'number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        return $model;
    }
}
