<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\spec\qrsResource;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\spec\searchResource;
use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description The QRS worker specifications.
     *
     * @var qrsResource
     */
    public $qrsResource;

    /**
     * @description The searcher worker specifications.
     *
     * @var searchResource
     */
    public $searchResource;
    protected $_name = [
        'qrsResource' => 'qrsResource',
        'searchResource' => 'searchResource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->qrsResource) {
            $res['qrsResource'] = null !== $this->qrsResource ? $this->qrsResource->toMap() : null;
        }
        if (null !== $this->searchResource) {
            $res['searchResource'] = null !== $this->searchResource ? $this->searchResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['qrsResource'])) {
            $model->qrsResource = qrsResource::fromMap($map['qrsResource']);
        }
        if (isset($map['searchResource'])) {
            $model->searchResource = searchResource::fromMap($map['searchResource']);
        }

        return $model;
    }
}
