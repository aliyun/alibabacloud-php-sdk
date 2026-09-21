<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;

class autoUpgradeConfig extends Model
{
    /**
     * @var int
     */
    public $capacityUsedRatio;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $step;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'capacityUsedRatio' => 'capacityUsedRatio',
        'enabled' => 'enabled',
        'step' => 'step',
        'time' => 'time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityUsedRatio) {
            $res['capacityUsedRatio'] = $this->capacityUsedRatio;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
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
        if (isset($map['capacityUsedRatio'])) {
            $model->capacityUsedRatio = $map['capacityUsedRatio'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
