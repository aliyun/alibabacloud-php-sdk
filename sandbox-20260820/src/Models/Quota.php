<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class Quota extends Model
{
    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $memoryGB;

    /**
     * @var int
     */
    public $scalingCpuCoresPerMinute;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'cpuCores' => 'cpuCores',
        'instanceCount' => 'instanceCount',
        'memoryGB' => 'memoryGB',
        'scalingCpuCoresPerMinute' => 'scalingCpuCoresPerMinute',
        'tagValue' => 'tagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }

        if (null !== $this->instanceCount) {
            $res['instanceCount'] = $this->instanceCount;
        }

        if (null !== $this->memoryGB) {
            $res['memoryGB'] = $this->memoryGB;
        }

        if (null !== $this->scalingCpuCoresPerMinute) {
            $res['scalingCpuCoresPerMinute'] = $this->scalingCpuCoresPerMinute;
        }

        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
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
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }

        if (isset($map['instanceCount'])) {
            $model->instanceCount = $map['instanceCount'];
        }

        if (isset($map['memoryGB'])) {
            $model->memoryGB = $map['memoryGB'];
        }

        if (isset($map['scalingCpuCoresPerMinute'])) {
            $model->scalingCpuCoresPerMinute = $map['scalingCpuCoresPerMinute'];
        }

        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
