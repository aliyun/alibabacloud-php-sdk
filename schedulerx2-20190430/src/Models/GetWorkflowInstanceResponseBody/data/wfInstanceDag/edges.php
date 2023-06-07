<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data\wfInstanceDag;

use AlibabaCloud\Tea\Model;

class edges extends Model
{
    /**
     * @description The upstream job instance of the current job instance. The value 0 indicates that the upstream job instance is the root node.
     *
     * @example 24058798
     *
     * @var int
     */
    public $source;

    /**
     * @description The downstream job instance of the current job instance.
     *
     * @example 24058796
     *
     * @var int
     */
    public $target;
    protected $_name = [
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
