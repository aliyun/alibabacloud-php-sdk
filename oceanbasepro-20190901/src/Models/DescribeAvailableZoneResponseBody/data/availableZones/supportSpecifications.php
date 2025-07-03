<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications\diskSizeRange;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications\supportEngineVersions;

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
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var supportEngineVersions[]
     */
    public $supportEngineVersions;
    protected $_name = [
        'diskSizeRange' => 'DiskSizeRange',
        'diskTypes' => 'DiskTypes',
        'instanceClass' => 'InstanceClass',
        'spec' => 'Spec',
        'supportEngineVersions' => 'SupportEngineVersions',
    ];

    public function validate()
    {
        if (null !== $this->diskSizeRange) {
            $this->diskSizeRange->validate();
        }
        if (\is_array($this->diskTypes)) {
            Model::validateArray($this->diskTypes);
        }
        if (\is_array($this->supportEngineVersions)) {
            Model::validateArray($this->supportEngineVersions);
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
                    $res['DiskTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->supportEngineVersions) {
            if (\is_array($this->supportEngineVersions)) {
                $res['SupportEngineVersions'] = [];
                $n1 = 0;
                foreach ($this->supportEngineVersions as $item1) {
                    $res['SupportEngineVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                    $model->diskTypes[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['SupportEngineVersions'] as $item1) {
                    $model->supportEngineVersions[$n1] = supportEngineVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
