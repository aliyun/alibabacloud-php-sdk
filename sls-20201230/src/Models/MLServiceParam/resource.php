<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var int
     */
    public $cpuLimit;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $memoryLimit;

    /**
     * @var int
     */
    public $replica;
    protected $_name = [
        'cpuLimit' => 'cpuLimit',
        'gpu' => 'gpu',
        'memoryLimit' => 'memoryLimit',
        'replica' => 'replica',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuLimit) {
            $res['cpuLimit'] = $this->cpuLimit;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
        }

        if (null !== $this->memoryLimit) {
            $res['memoryLimit'] = $this->memoryLimit;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
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
        if (isset($map['cpuLimit'])) {
            $model->cpuLimit = $map['cpuLimit'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        if (isset($map['memoryLimit'])) {
            $model->memoryLimit = $map['memoryLimit'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        return $model;
    }
}
