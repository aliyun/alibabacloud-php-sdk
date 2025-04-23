<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\spec\qrsResource;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\spec\searchResource;

class spec extends Model
{
    /**
     * @var qrsResource
     */
    public $qrsResource;

    /**
     * @var searchResource
     */
    public $searchResource;
    protected $_name = [
        'qrsResource' => 'qrsResource',
        'searchResource' => 'searchResource',
    ];

    public function validate()
    {
        if (null !== $this->qrsResource) {
            $this->qrsResource->validate();
        }
        if (null !== $this->searchResource) {
            $this->searchResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qrsResource) {
            $res['qrsResource'] = null !== $this->qrsResource ? $this->qrsResource->toArray($noStream) : $this->qrsResource;
        }

        if (null !== $this->searchResource) {
            $res['searchResource'] = null !== $this->searchResource ? $this->searchResource->toArray($noStream) : $this->searchResource;
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
        if (isset($map['qrsResource'])) {
            $model->qrsResource = qrsResource::fromMap($map['qrsResource']);
        }

        if (isset($map['searchResource'])) {
            $model->searchResource = searchResource::fromMap($map['searchResource']);
        }

        return $model;
    }
}
