<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;

class gpuDetails extends Model
{
    /**
     * @var int
     */
    public $allocatedUnit;

    /**
     * @var string
     */
    public $gpuModel;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'allocatedUnit' => 'AllocatedUnit',
        'gpuModel' => 'GpuModel',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocatedUnit) {
            $res['AllocatedUnit'] = $this->allocatedUnit;
        }

        if (null !== $this->gpuModel) {
            $res['GpuModel'] = $this->gpuModel;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AllocatedUnit'])) {
            $model->allocatedUnit = $map['AllocatedUnit'];
        }

        if (isset($map['GpuModel'])) {
            $model->gpuModel = $map['GpuModel'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
