<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerSpec\containerCpu;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerSpec\containerMemory;
use AlibabaCloud\Tea\Model;

class containerSpec extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var bool
     */
    public $hasCustomMetrics;

    /**
     * @var bool
     */
    public $hasCpu;

    /**
     * @var string
     */
    public $envs;

    /**
     * @var bool
     */
    public $hasDiskIo;

    /**
     * @var bool
     */
    public $hasFilesystem;

    /**
     * @var bool
     */
    public $hasNetwork;

    /**
     * @var containerMemory
     */
    public $containerMemory;

    /**
     * @var bool
     */
    public $hasMemory;

    /**
     * @var containerCpu
     */
    public $containerCpu;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'image'            => 'Image',
        'labels'           => 'Labels',
        'hasCustomMetrics' => 'HasCustomMetrics',
        'hasCpu'           => 'HasCpu',
        'envs'             => 'Envs',
        'hasDiskIo'        => 'HasDiskIo',
        'hasFilesystem'    => 'HasFilesystem',
        'hasNetwork'       => 'HasNetwork',
        'containerMemory'  => 'ContainerMemory',
        'hasMemory'        => 'HasMemory',
        'containerCpu'     => 'ContainerCpu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->hasCustomMetrics) {
            $res['HasCustomMetrics'] = $this->hasCustomMetrics;
        }
        if (null !== $this->hasCpu) {
            $res['HasCpu'] = $this->hasCpu;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->hasDiskIo) {
            $res['HasDiskIo'] = $this->hasDiskIo;
        }
        if (null !== $this->hasFilesystem) {
            $res['HasFilesystem'] = $this->hasFilesystem;
        }
        if (null !== $this->hasNetwork) {
            $res['HasNetwork'] = $this->hasNetwork;
        }
        if (null !== $this->containerMemory) {
            $res['ContainerMemory'] = null !== $this->containerMemory ? $this->containerMemory->toMap() : null;
        }
        if (null !== $this->hasMemory) {
            $res['HasMemory'] = $this->hasMemory;
        }
        if (null !== $this->containerCpu) {
            $res['ContainerCpu'] = null !== $this->containerCpu ? $this->containerCpu->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['HasCustomMetrics'])) {
            $model->hasCustomMetrics = $map['HasCustomMetrics'];
        }
        if (isset($map['HasCpu'])) {
            $model->hasCpu = $map['HasCpu'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['HasDiskIo'])) {
            $model->hasDiskIo = $map['HasDiskIo'];
        }
        if (isset($map['HasFilesystem'])) {
            $model->hasFilesystem = $map['HasFilesystem'];
        }
        if (isset($map['HasNetwork'])) {
            $model->hasNetwork = $map['HasNetwork'];
        }
        if (isset($map['ContainerMemory'])) {
            $model->containerMemory = containerMemory::fromMap($map['ContainerMemory']);
        }
        if (isset($map['HasMemory'])) {
            $model->hasMemory = $map['HasMemory'];
        }
        if (isset($map['ContainerCpu'])) {
            $model->containerCpu = containerCpu::fromMap($map['ContainerCpu']);
        }

        return $model;
    }
}
