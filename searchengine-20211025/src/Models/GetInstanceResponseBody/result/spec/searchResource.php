<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\spec;

use AlibabaCloud\Tea\Model;

class searchResource extends Model
{
    /**
     * @description The category. Valid values: local_ssd, SSD, and cloud.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The storage capacity. Unit: GB.
     *
     * @example 100
     *
     * @var int
     */
    public $disk;

    /**
     * @description The memory of the instance. Unit: GB.
     *
     * @example 10
     *
     * @var int
     */
    public $mem;

    /**
     * @description The number of nodes.
     *
     * @example 1
     *
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
     * @return searchResource
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
