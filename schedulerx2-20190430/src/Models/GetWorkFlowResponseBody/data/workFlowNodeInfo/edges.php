<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkFlowResponseBody\data\workFlowNodeInfo;

use AlibabaCloud\Tea\Model;

class edges extends Model
{
    /**
     * @description The ID of the source job.
     *
     * @example 100
     *
     * @var int
     */
    public $source;

    /**
     * @description The ID of the target job.
     *
     * @example 200
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
