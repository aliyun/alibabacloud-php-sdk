<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications\diskSizeRange;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications\logDiskSizeRange;
use AlibabaCloud\Tea\Model;

class availableSpecifications extends Model
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
     * @var logDiskSizeRange
     */
    public $logDiskSizeRange;

    /**
     * @var int[]
     */
    public $nodeNum;

    /**
     * @example oceanbase.cluster.cd8.xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'diskSizeRange'    => 'DiskSizeRange',
        'diskTypes'        => 'DiskTypes',
        'instanceClass'    => 'InstanceClass',
        'logDiskSizeRange' => 'LogDiskSizeRange',
        'nodeNum'          => 'NodeNum',
        'spec'             => 'Spec',
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
        if (null !== $this->logDiskSizeRange) {
            $res['LogDiskSizeRange'] = null !== $this->logDiskSizeRange ? $this->logDiskSizeRange->toMap() : null;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpecifications
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
        if (isset($map['LogDiskSizeRange'])) {
            $model->logDiskSizeRange = logDiskSizeRange::fromMap($map['LogDiskSizeRange']);
        }
        if (isset($map['NodeNum'])) {
            if (!empty($map['NodeNum'])) {
                $model->nodeNum = $map['NodeNum'];
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
