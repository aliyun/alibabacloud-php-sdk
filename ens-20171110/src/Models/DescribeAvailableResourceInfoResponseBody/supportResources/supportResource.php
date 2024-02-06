<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\bandwidthTypes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\instanceSpeces;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\isp;
use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @var bandwidthTypes
     */
    public $bandwidthTypes;

    /**
     * @description The maximum capacity of a data disk. Unit: GB.
     *
     * @example 200
     *
     * @var int
     */
    public $dataDiskMaxSize;

    /**
     * @description The minimum data disk size. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $dataDiskMinSize;

    /**
     * @var ensRegionIds
     */
    public $ensRegionIds;

    /**
     * @description The supplementary information about the edge nodes.
     *
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
     * @description The maximum size of the system disk. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $systemDiskMaxSize;

    /**
     * @description The minimum capacity of a system disk. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $systemDiskMinSize;
    protected $_name = [
        'bandwidthTypes'      => 'BandwidthTypes',
        'dataDiskMaxSize'     => 'DataDiskMaxSize',
        'dataDiskMinSize'     => 'DataDiskMinSize',
        'ensRegionIds'        => 'EnsRegionIds',
        'ensRegionIdsExtends' => 'EnsRegionIdsExtends',
        'instanceSpeces'      => 'InstanceSpeces',
        'isp'                 => 'Isp',
        'systemDiskMaxSize'   => 'SystemDiskMaxSize',
        'systemDiskMinSize'   => 'SystemDiskMinSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthTypes) {
            $res['BandwidthTypes'] = null !== $this->bandwidthTypes ? $this->bandwidthTypes->toMap() : null;
        }
        if (null !== $this->dataDiskMaxSize) {
            $res['DataDiskMaxSize'] = $this->dataDiskMaxSize;
        }
        if (null !== $this->dataDiskMinSize) {
            $res['DataDiskMinSize'] = $this->dataDiskMinSize;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = null !== $this->ensRegionIds ? $this->ensRegionIds->toMap() : null;
        }
        if (null !== $this->ensRegionIdsExtends) {
            $res['EnsRegionIdsExtends'] = null !== $this->ensRegionIdsExtends ? $this->ensRegionIdsExtends->toMap() : null;
        }
        if (null !== $this->instanceSpeces) {
            $res['InstanceSpeces'] = null !== $this->instanceSpeces ? $this->instanceSpeces->toMap() : null;
        }
        if (null !== $this->isp) {
            $res['Isp'] = null !== $this->isp ? $this->isp->toMap() : null;
        }
        if (null !== $this->systemDiskMaxSize) {
            $res['SystemDiskMaxSize'] = $this->systemDiskMaxSize;
        }
        if (null !== $this->systemDiskMinSize) {
            $res['SystemDiskMinSize'] = $this->systemDiskMinSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
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
