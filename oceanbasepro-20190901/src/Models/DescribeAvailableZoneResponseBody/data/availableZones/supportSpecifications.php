<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications\diskSizeRange;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications\supportEngineVersions;
use AlibabaCloud\Tea\Model;

class supportSpecifications extends Model
{
    /**
     * @var diskSizeRange
     */
    public $diskSizeRange;

    /**
     * @var string[]
     */
    public $diskTypes;

    /**
     * @example 4C16GB
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @example oceanbase.cluster.cd8.xlarge
     *
     * @var string
     */
    public $spec;

    /**
     * @var supportEngineVersions[]
     */
    public $supportEngineVersions;
    protected $_name = [
        'diskSizeRange'         => 'DiskSizeRange',
        'diskTypes'             => 'DiskTypes',
        'instanceClass'         => 'InstanceClass',
        'spec'                  => 'Spec',
        'supportEngineVersions' => 'SupportEngineVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSizeRange) {
            $res['DiskSizeRange'] = null !== $this->diskSizeRange ? $this->diskSizeRange->toMap() : null;
        }
        if (null !== $this->diskTypes) {
            $res['DiskTypes'] = $this->diskTypes;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->supportEngineVersions) {
            $res['SupportEngineVersions'] = [];
            if (null !== $this->supportEngineVersions && \is_array($this->supportEngineVersions)) {
                $n = 0;
                foreach ($this->supportEngineVersions as $item) {
                    $res['SupportEngineVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportSpecifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSizeRange'])) {
            $model->diskSizeRange = diskSizeRange::fromMap($map['DiskSizeRange']);
        }
        if (isset($map['DiskTypes'])) {
            if (!empty($map['DiskTypes'])) {
                $model->diskTypes = $map['DiskTypes'];
            }
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SupportEngineVersions'])) {
            if (!empty($map['SupportEngineVersions'])) {
                $model->supportEngineVersions = [];
                $n                            = 0;
                foreach ($map['SupportEngineVersions'] as $item) {
                    $model->supportEngineVersions[$n++] = null !== $item ? supportEngineVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
