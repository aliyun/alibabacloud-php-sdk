<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList;

use AlibabaCloud\Dara\Model;

class imageExtendInfoModel extends Model
{
    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var int
     */
    public $gpuCategory;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize' => 'DataDiskSize',
        'gpuCategory' => 'GpuCategory',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
