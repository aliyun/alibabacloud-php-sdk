<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetricStoreRequest extends Model
{
    /**
     * @var bool
     */
    public $autoSplit;

    /**
     * @example 64
     *
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var string
     */
    public $mode;

    /**
     * @example 7
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'autoSplit'     => 'autoSplit',
        'maxSplitShard' => 'maxSplitShard',
        'mode'          => 'mode',
        'ttl'           => 'ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }
        if (null !== $this->maxSplitShard) {
            $res['maxSplitShard'] = $this->maxSplitShard;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetricStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }
        if (isset($map['maxSplitShard'])) {
            $model->maxSplitShard = $map['maxSplitShard'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
