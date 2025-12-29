<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentRequest;

use AlibabaCloud\Dara\Model;

class rollingPolicy extends Model
{
    /**
     * @var int
     */
    public $batchInterval;

    /**
     * @var int
     */
    public $maxParallelism;

    /**
     * @var string
     */
    public $pausePolicy;
    protected $_name = [
        'batchInterval' => 'batchInterval',
        'maxParallelism' => 'maxParallelism',
        'pausePolicy' => 'pausePolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchInterval) {
            $res['batchInterval'] = $this->batchInterval;
        }

        if (null !== $this->maxParallelism) {
            $res['maxParallelism'] = $this->maxParallelism;
        }

        if (null !== $this->pausePolicy) {
            $res['pausePolicy'] = $this->pausePolicy;
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
        if (isset($map['batchInterval'])) {
            $model->batchInterval = $map['batchInterval'];
        }

        if (isset($map['maxParallelism'])) {
            $model->maxParallelism = $map['maxParallelism'];
        }

        if (isset($map['pausePolicy'])) {
            $model->pausePolicy = $map['pausePolicy'];
        }

        return $model;
    }
}
