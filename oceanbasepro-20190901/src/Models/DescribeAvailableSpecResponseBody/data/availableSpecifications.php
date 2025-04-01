<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications\diskSizeRange;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications\logDiskSizeRange;

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
     * @var string
     */
    public $spec;
    protected $_name = [
        'diskSizeRange' => 'DiskSizeRange',
        'diskTypes' => 'DiskTypes',
        'instanceClass' => 'InstanceClass',
        'logDiskSizeRange' => 'LogDiskSizeRange',
        'nodeNum' => 'NodeNum',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        if (null !== $this->diskSizeRange) {
            $this->diskSizeRange->validate();
        }
        if (\is_array($this->diskTypes)) {
            Model::validateArray($this->diskTypes);
        }
        if (null !== $this->logDiskSizeRange) {
            $this->logDiskSizeRange->validate();
        }
        if (\is_array($this->nodeNum)) {
            Model::validateArray($this->nodeNum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskSizeRange) {
            $res['DiskSizeRange'] = null !== $this->diskSizeRange ? $this->diskSizeRange->toArray($noStream) : $this->diskSizeRange;
        }

        if (null !== $this->diskTypes) {
            if (\is_array($this->diskTypes)) {
                $res['DiskTypes'] = [];
                $n1 = 0;
                foreach ($this->diskTypes as $item1) {
                    $res['DiskTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->logDiskSizeRange) {
            $res['LogDiskSizeRange'] = null !== $this->logDiskSizeRange ? $this->logDiskSizeRange->toArray($noStream) : $this->logDiskSizeRange;
        }

        if (null !== $this->nodeNum) {
            if (\is_array($this->nodeNum)) {
                $res['NodeNum'] = [];
                $n1 = 0;
                foreach ($this->nodeNum as $item1) {
                    $res['NodeNum'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['DiskSizeRange'])) {
            $model->diskSizeRange = diskSizeRange::fromMap($map['DiskSizeRange']);
        }

        if (isset($map['DiskTypes'])) {
            if (!empty($map['DiskTypes'])) {
                $model->diskTypes = [];
                $n1 = 0;
                foreach ($map['DiskTypes'] as $item1) {
                    $model->diskTypes[$n1++] = $item1;
                }
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
                $model->nodeNum = [];
                $n1 = 0;
                foreach ($map['NodeNum'] as $item1) {
                    $model->nodeNum[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
