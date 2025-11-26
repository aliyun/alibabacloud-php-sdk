<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\bandwidthTypes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\instanceSpeces;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\isp;

class supportResource extends Model
{
    /**
     * @var bandwidthTypes
     */
    public $bandwidthTypes;

    /**
     * @var int
     */
    public $dataDiskMaxSize;

    /**
     * @var int
     */
    public $dataDiskMinSize;

    /**
     * @var ensRegionIds
     */
    public $ensRegionIds;

    /**
     * @var ensRegionIdsExtends
     */
    public $ensRegionIdsExtends;

    /**
     * @var instanceSpeces
     */
    public $instanceSpeces;

    /**
     * @var isp
     */
    public $isp;

    /**
     * @var int
     */
    public $systemDiskMaxSize;

    /**
     * @var int
     */
    public $systemDiskMinSize;
    protected $_name = [
        'bandwidthTypes' => 'BandwidthTypes',
        'dataDiskMaxSize' => 'DataDiskMaxSize',
        'dataDiskMinSize' => 'DataDiskMinSize',
        'ensRegionIds' => 'EnsRegionIds',
        'ensRegionIdsExtends' => 'EnsRegionIdsExtends',
        'instanceSpeces' => 'InstanceSpeces',
        'isp' => 'Isp',
        'systemDiskMaxSize' => 'SystemDiskMaxSize',
        'systemDiskMinSize' => 'SystemDiskMinSize',
    ];

    public function validate()
    {
        if (null !== $this->bandwidthTypes) {
            $this->bandwidthTypes->validate();
        }
        if (null !== $this->ensRegionIds) {
            $this->ensRegionIds->validate();
        }
        if (null !== $this->ensRegionIdsExtends) {
            $this->ensRegionIdsExtends->validate();
        }
        if (null !== $this->instanceSpeces) {
            $this->instanceSpeces->validate();
        }
        if (null !== $this->isp) {
            $this->isp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthTypes) {
            $res['BandwidthTypes'] = null !== $this->bandwidthTypes ? $this->bandwidthTypes->toArray($noStream) : $this->bandwidthTypes;
        }

        if (null !== $this->dataDiskMaxSize) {
            $res['DataDiskMaxSize'] = $this->dataDiskMaxSize;
        }

        if (null !== $this->dataDiskMinSize) {
            $res['DataDiskMinSize'] = $this->dataDiskMinSize;
        }

        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = null !== $this->ensRegionIds ? $this->ensRegionIds->toArray($noStream) : $this->ensRegionIds;
        }

        if (null !== $this->ensRegionIdsExtends) {
            $res['EnsRegionIdsExtends'] = null !== $this->ensRegionIdsExtends ? $this->ensRegionIdsExtends->toArray($noStream) : $this->ensRegionIdsExtends;
        }

        if (null !== $this->instanceSpeces) {
            $res['InstanceSpeces'] = null !== $this->instanceSpeces ? $this->instanceSpeces->toArray($noStream) : $this->instanceSpeces;
        }

        if (null !== $this->isp) {
            $res['Isp'] = null !== $this->isp ? $this->isp->toArray($noStream) : $this->isp;
        }

        if (null !== $this->systemDiskMaxSize) {
            $res['SystemDiskMaxSize'] = $this->systemDiskMaxSize;
        }

        if (null !== $this->systemDiskMinSize) {
            $res['SystemDiskMinSize'] = $this->systemDiskMinSize;
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
        if (isset($map['BandwidthTypes'])) {
            $model->bandwidthTypes = bandwidthTypes::fromMap($map['BandwidthTypes']);
        }

        if (isset($map['DataDiskMaxSize'])) {
            $model->dataDiskMaxSize = $map['DataDiskMaxSize'];
        }

        if (isset($map['DataDiskMinSize'])) {
            $model->dataDiskMinSize = $map['DataDiskMinSize'];
        }

        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = ensRegionIds::fromMap($map['EnsRegionIds']);
        }

        if (isset($map['EnsRegionIdsExtends'])) {
            $model->ensRegionIdsExtends = ensRegionIdsExtends::fromMap($map['EnsRegionIdsExtends']);
        }

        if (isset($map['InstanceSpeces'])) {
            $model->instanceSpeces = instanceSpeces::fromMap($map['InstanceSpeces']);
        }

        if (isset($map['Isp'])) {
            $model->isp = isp::fromMap($map['Isp']);
        }

        if (isset($map['SystemDiskMaxSize'])) {
            $model->systemDiskMaxSize = $map['SystemDiskMaxSize'];
        }

        if (isset($map['SystemDiskMinSize'])) {
            $model->systemDiskMinSize = $map['SystemDiskMinSize'];
        }

        return $model;
    }
}
