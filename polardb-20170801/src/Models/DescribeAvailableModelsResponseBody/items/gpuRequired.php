<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAvailableModelsResponseBody\items;

use AlibabaCloud\Dara\Model;

class gpuRequired extends Model
{
    /**
     * @var string
     */
    public $gpuMinCount;

    /**
     * @var string
     */
    public $gpuModel;
    protected $_name = [
        'gpuMinCount' => 'GpuMinCount',
        'gpuModel' => 'GpuModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuMinCount) {
            $res['GpuMinCount'] = $this->gpuMinCount;
        }

        if (null !== $this->gpuModel) {
            $res['GpuModel'] = $this->gpuModel;
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
        if (isset($map['GpuMinCount'])) {
            $model->gpuMinCount = $map['GpuMinCount'];
        }

        if (isset($map['GpuModel'])) {
            $model->gpuModel = $map['GpuModel'];
        }

        return $model;
    }
}
