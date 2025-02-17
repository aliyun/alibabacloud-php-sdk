<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image;

use AlibabaCloud\Dara\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $cpuOnlineDowngrade;
    /**
     * @var string
     */
    public $cpuOnlineUpgrade;
    /**
     * @var string
     */
    public $imdsSupport;
    /**
     * @var string
     */
    public $memoryOnlineDowngrade;
    /**
     * @var string
     */
    public $memoryOnlineUpgrade;
    /**
     * @var string
     */
    public $nvmeSupport;
    protected $_name = [
        'cpuOnlineDowngrade'    => 'CpuOnlineDowngrade',
        'cpuOnlineUpgrade'      => 'CpuOnlineUpgrade',
        'imdsSupport'           => 'ImdsSupport',
        'memoryOnlineDowngrade' => 'MemoryOnlineDowngrade',
        'memoryOnlineUpgrade'   => 'MemoryOnlineUpgrade',
        'nvmeSupport'           => 'NvmeSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuOnlineDowngrade) {
            $res['CpuOnlineDowngrade'] = $this->cpuOnlineDowngrade;
        }

        if (null !== $this->cpuOnlineUpgrade) {
            $res['CpuOnlineUpgrade'] = $this->cpuOnlineUpgrade;
        }

        if (null !== $this->imdsSupport) {
            $res['ImdsSupport'] = $this->imdsSupport;
        }

        if (null !== $this->memoryOnlineDowngrade) {
            $res['MemoryOnlineDowngrade'] = $this->memoryOnlineDowngrade;
        }

        if (null !== $this->memoryOnlineUpgrade) {
            $res['MemoryOnlineUpgrade'] = $this->memoryOnlineUpgrade;
        }

        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
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
        if (isset($map['CpuOnlineDowngrade'])) {
            $model->cpuOnlineDowngrade = $map['CpuOnlineDowngrade'];
        }

        if (isset($map['CpuOnlineUpgrade'])) {
            $model->cpuOnlineUpgrade = $map['CpuOnlineUpgrade'];
        }

        if (isset($map['ImdsSupport'])) {
            $model->imdsSupport = $map['ImdsSupport'];
        }

        if (isset($map['MemoryOnlineDowngrade'])) {
            $model->memoryOnlineDowngrade = $map['MemoryOnlineDowngrade'];
        }

        if (isset($map['MemoryOnlineUpgrade'])) {
            $model->memoryOnlineUpgrade = $map['MemoryOnlineUpgrade'];
        }

        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }

        return $model;
    }
}
