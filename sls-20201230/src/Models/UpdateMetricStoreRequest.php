<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetricStoreRequest extends Model
{
    /**
     * @var bool
     */
    public $autoSplit;

    /**
     * @var int
     */
    public $hotTtl;

    /**
     * @var int
     */
    public $infrequentAccessTTL;

    /**
     * @var int
     */
    public $maxSplitShard;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'autoSplit' => 'autoSplit',
        'hotTtl' => 'hot_ttl',
        'infrequentAccessTTL' => 'infrequentAccessTTL',
        'maxSplitShard' => 'maxSplitShard',
        'mode' => 'mode',
        'ttl' => 'ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSplit) {
            $res['autoSplit'] = $this->autoSplit;
        }

        if (null !== $this->hotTtl) {
            $res['hot_ttl'] = $this->hotTtl;
        }

        if (null !== $this->infrequentAccessTTL) {
            $res['infrequentAccessTTL'] = $this->infrequentAccessTTL;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoSplit'])) {
            $model->autoSplit = $map['autoSplit'];
        }

        if (isset($map['hot_ttl'])) {
            $model->hotTtl = $map['hot_ttl'];
        }

        if (isset($map['infrequentAccessTTL'])) {
            $model->infrequentAccessTTL = $map['infrequentAccessTTL'];
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
