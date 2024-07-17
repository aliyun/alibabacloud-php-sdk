<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\spec;

use AlibabaCloud\Tea\Model;

class qrsResource extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $nodeCount;
    protected $_name = [
        'category'  => 'category',
        'cpu'       => 'cpu',
        'disk'      => 'disk',
        'mem'       => 'mem',
        'nodeCount' => 'nodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->disk) {
            $res['disk'] = $this->disk;
        }
        if (null !== $this->mem) {
            $res['mem'] = $this->mem;
        }
        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qrsResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['disk'])) {
            $model->disk = $map['disk'];
        }
        if (isset($map['mem'])) {
            $model->mem = $map['mem'];
        }
        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }

        return $model;
    }
}
