<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DataZoneSupportCompactionServiceValue;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\beNumber;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\beStorageConstraints;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\bigDataInstanceTypeConstraints;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\compactionServiceCuConstraint;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\feNumber;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\feSpecType;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\feStorage;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\haFeResourceSpec;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\localSSDInstanceTypeConstraints;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\normalFeResourceSpec;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\specType;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\versionConstraint;

class data extends Model
{
    /**
     * @var int[]
     */
    public $agentCu;

    /**
     * @var int[]
     */
    public $beCu;

    /**
     * @var int[]
     */
    public $beCuOnEcs;

    /**
     * @var beNumber
     */
    public $beNumber;

    /**
     * @var beStorageConstraints[]
     */
    public $beStorageConstraints;

    /**
     * @var bigDataInstanceTypeConstraints[]
     */
    public $bigDataInstanceTypeConstraints;

    /**
     * @var int[]
     */
    public $feCu;

    /**
     * @var int[]
     */
    public $feCuOnEcs;

    /**
     * @var feNumber
     */
    public $feNumber;

    /**
     * @var feSpecType[]
     */
    public $feSpecType;

    /**
     * @var feStorage
     */
    public $feStorage;

    /**
     * @var haFeResourceSpec
     */
    public $haFeResourceSpec;

    /**
     * @var localSSDInstanceTypeConstraints[]
     */
    public $localSSDInstanceTypeConstraints;

    /**
     * @var normalFeResourceSpec
     */
    public $normalFeResourceSpec;

    /**
     * @var specType[]
     */
    public $specType;

    /**
     * @var mixed[][]
     */
    public $splitDiskThresholdMap;

    /**
     * @var versionConstraint
     */
    public $versionConstraint;

    /**
     * @var string[][]
     */
    public $zoneSupportedEedTypes;

    /**
     * @var string[][]
     */
    public $zoneSupportedSpecTypes;

    /**
     * @var compactionServiceCuConstraint
     */
    public $compactionServiceCuConstraint;

    /**
     * @var DataZoneSupportCompactionServiceValue[][]
     */
    public $zoneSupportCompactionService;
    protected $_name = [
        'agentCu' => 'AgentCu',
        'beCu' => 'BeCu',
        'beCuOnEcs' => 'BeCuOnEcs',
        'beNumber' => 'BeNumber',
        'beStorageConstraints' => 'BeStorageConstraints',
        'bigDataInstanceTypeConstraints' => 'BigDataInstanceTypeConstraints',
        'feCu' => 'FeCu',
        'feCuOnEcs' => 'FeCuOnEcs',
        'feNumber' => 'FeNumber',
        'feSpecType' => 'FeSpecType',
        'feStorage' => 'FeStorage',
        'haFeResourceSpec' => 'HaFeResourceSpec',
        'localSSDInstanceTypeConstraints' => 'LocalSSDInstanceTypeConstraints',
        'normalFeResourceSpec' => 'NormalFeResourceSpec',
        'specType' => 'SpecType',
        'splitDiskThresholdMap' => 'SplitDiskThresholdMap',
        'versionConstraint' => 'VersionConstraint',
        'zoneSupportedEedTypes' => 'ZoneSupportedEedTypes',
        'zoneSupportedSpecTypes' => 'ZoneSupportedSpecTypes',
        'compactionServiceCuConstraint' => 'compactionServiceCuConstraint',
        'zoneSupportCompactionService' => 'zoneSupportCompactionService',
    ];

    public function validate()
    {
        if (\is_array($this->agentCu)) {
            Model::validateArray($this->agentCu);
        }
        if (\is_array($this->beCu)) {
            Model::validateArray($this->beCu);
        }
        if (\is_array($this->beCuOnEcs)) {
            Model::validateArray($this->beCuOnEcs);
        }
        if (null !== $this->beNumber) {
            $this->beNumber->validate();
        }
        if (\is_array($this->beStorageConstraints)) {
            Model::validateArray($this->beStorageConstraints);
        }
        if (\is_array($this->bigDataInstanceTypeConstraints)) {
            Model::validateArray($this->bigDataInstanceTypeConstraints);
        }
        if (\is_array($this->feCu)) {
            Model::validateArray($this->feCu);
        }
        if (\is_array($this->feCuOnEcs)) {
            Model::validateArray($this->feCuOnEcs);
        }
        if (null !== $this->feNumber) {
            $this->feNumber->validate();
        }
        if (\is_array($this->feSpecType)) {
            Model::validateArray($this->feSpecType);
        }
        if (null !== $this->feStorage) {
            $this->feStorage->validate();
        }
        if (null !== $this->haFeResourceSpec) {
            $this->haFeResourceSpec->validate();
        }
        if (\is_array($this->localSSDInstanceTypeConstraints)) {
            Model::validateArray($this->localSSDInstanceTypeConstraints);
        }
        if (null !== $this->normalFeResourceSpec) {
            $this->normalFeResourceSpec->validate();
        }
        if (\is_array($this->specType)) {
            Model::validateArray($this->specType);
        }
        if (\is_array($this->splitDiskThresholdMap)) {
            Model::validateArray($this->splitDiskThresholdMap);
        }
        if (null !== $this->versionConstraint) {
            $this->versionConstraint->validate();
        }
        if (\is_array($this->zoneSupportedEedTypes)) {
            Model::validateArray($this->zoneSupportedEedTypes);
        }
        if (\is_array($this->zoneSupportedSpecTypes)) {
            Model::validateArray($this->zoneSupportedSpecTypes);
        }
        if (null !== $this->compactionServiceCuConstraint) {
            $this->compactionServiceCuConstraint->validate();
        }
        if (\is_array($this->zoneSupportCompactionService)) {
            Model::validateArray($this->zoneSupportCompactionService);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCu) {
            if (\is_array($this->agentCu)) {
                $res['AgentCu'] = [];
                $n1 = 0;
                foreach ($this->agentCu as $item1) {
                    $res['AgentCu'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beCu) {
            if (\is_array($this->beCu)) {
                $res['BeCu'] = [];
                $n1 = 0;
                foreach ($this->beCu as $item1) {
                    $res['BeCu'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beCuOnEcs) {
            if (\is_array($this->beCuOnEcs)) {
                $res['BeCuOnEcs'] = [];
                $n1 = 0;
                foreach ($this->beCuOnEcs as $item1) {
                    $res['BeCuOnEcs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beNumber) {
            $res['BeNumber'] = null !== $this->beNumber ? $this->beNumber->toArray($noStream) : $this->beNumber;
        }

        if (null !== $this->beStorageConstraints) {
            if (\is_array($this->beStorageConstraints)) {
                $res['BeStorageConstraints'] = [];
                $n1 = 0;
                foreach ($this->beStorageConstraints as $item1) {
                    $res['BeStorageConstraints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bigDataInstanceTypeConstraints) {
            if (\is_array($this->bigDataInstanceTypeConstraints)) {
                $res['BigDataInstanceTypeConstraints'] = [];
                $n1 = 0;
                foreach ($this->bigDataInstanceTypeConstraints as $item1) {
                    $res['BigDataInstanceTypeConstraints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feCu) {
            if (\is_array($this->feCu)) {
                $res['FeCu'] = [];
                $n1 = 0;
                foreach ($this->feCu as $item1) {
                    $res['FeCu'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feCuOnEcs) {
            if (\is_array($this->feCuOnEcs)) {
                $res['FeCuOnEcs'] = [];
                $n1 = 0;
                foreach ($this->feCuOnEcs as $item1) {
                    $res['FeCuOnEcs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feNumber) {
            $res['FeNumber'] = null !== $this->feNumber ? $this->feNumber->toArray($noStream) : $this->feNumber;
        }

        if (null !== $this->feSpecType) {
            if (\is_array($this->feSpecType)) {
                $res['FeSpecType'] = [];
                $n1 = 0;
                foreach ($this->feSpecType as $item1) {
                    $res['FeSpecType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feStorage) {
            $res['FeStorage'] = null !== $this->feStorage ? $this->feStorage->toArray($noStream) : $this->feStorage;
        }

        if (null !== $this->haFeResourceSpec) {
            $res['HaFeResourceSpec'] = null !== $this->haFeResourceSpec ? $this->haFeResourceSpec->toArray($noStream) : $this->haFeResourceSpec;
        }

        if (null !== $this->localSSDInstanceTypeConstraints) {
            if (\is_array($this->localSSDInstanceTypeConstraints)) {
                $res['LocalSSDInstanceTypeConstraints'] = [];
                $n1 = 0;
                foreach ($this->localSSDInstanceTypeConstraints as $item1) {
                    $res['LocalSSDInstanceTypeConstraints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalFeResourceSpec) {
            $res['NormalFeResourceSpec'] = null !== $this->normalFeResourceSpec ? $this->normalFeResourceSpec->toArray($noStream) : $this->normalFeResourceSpec;
        }

        if (null !== $this->specType) {
            if (\is_array($this->specType)) {
                $res['SpecType'] = [];
                $n1 = 0;
                foreach ($this->specType as $item1) {
                    $res['SpecType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->splitDiskThresholdMap) {
            if (\is_array($this->splitDiskThresholdMap)) {
                $res['SplitDiskThresholdMap'] = [];
                foreach ($this->splitDiskThresholdMap as $key1 => $value1) {
                    $res['SplitDiskThresholdMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->versionConstraint) {
            $res['VersionConstraint'] = null !== $this->versionConstraint ? $this->versionConstraint->toArray($noStream) : $this->versionConstraint;
        }

        if (null !== $this->zoneSupportedEedTypes) {
            if (\is_array($this->zoneSupportedEedTypes)) {
                $res['ZoneSupportedEedTypes'] = [];
                foreach ($this->zoneSupportedEedTypes as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['ZoneSupportedEedTypes'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['ZoneSupportedEedTypes'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->zoneSupportedSpecTypes) {
            if (\is_array($this->zoneSupportedSpecTypes)) {
                $res['ZoneSupportedSpecTypes'] = [];
                foreach ($this->zoneSupportedSpecTypes as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['ZoneSupportedSpecTypes'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['ZoneSupportedSpecTypes'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->compactionServiceCuConstraint) {
            $res['compactionServiceCuConstraint'] = null !== $this->compactionServiceCuConstraint ? $this->compactionServiceCuConstraint->toArray($noStream) : $this->compactionServiceCuConstraint;
        }

        if (null !== $this->zoneSupportCompactionService) {
            if (\is_array($this->zoneSupportCompactionService)) {
                $res['zoneSupportCompactionService'] = [];
                foreach ($this->zoneSupportCompactionService as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['zoneSupportCompactionService'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['zoneSupportCompactionService'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['AgentCu'])) {
            if (!empty($map['AgentCu'])) {
                $model->agentCu = [];
                $n1 = 0;
                foreach ($map['AgentCu'] as $item1) {
                    $model->agentCu[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeCu'])) {
            if (!empty($map['BeCu'])) {
                $model->beCu = [];
                $n1 = 0;
                foreach ($map['BeCu'] as $item1) {
                    $model->beCu[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeCuOnEcs'])) {
            if (!empty($map['BeCuOnEcs'])) {
                $model->beCuOnEcs = [];
                $n1 = 0;
                foreach ($map['BeCuOnEcs'] as $item1) {
                    $model->beCuOnEcs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeNumber'])) {
            $model->beNumber = beNumber::fromMap($map['BeNumber']);
        }

        if (isset($map['BeStorageConstraints'])) {
            if (!empty($map['BeStorageConstraints'])) {
                $model->beStorageConstraints = [];
                $n1 = 0;
                foreach ($map['BeStorageConstraints'] as $item1) {
                    $model->beStorageConstraints[$n1] = beStorageConstraints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BigDataInstanceTypeConstraints'])) {
            if (!empty($map['BigDataInstanceTypeConstraints'])) {
                $model->bigDataInstanceTypeConstraints = [];
                $n1 = 0;
                foreach ($map['BigDataInstanceTypeConstraints'] as $item1) {
                    $model->bigDataInstanceTypeConstraints[$n1] = bigDataInstanceTypeConstraints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FeCu'])) {
            if (!empty($map['FeCu'])) {
                $model->feCu = [];
                $n1 = 0;
                foreach ($map['FeCu'] as $item1) {
                    $model->feCu[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FeCuOnEcs'])) {
            if (!empty($map['FeCuOnEcs'])) {
                $model->feCuOnEcs = [];
                $n1 = 0;
                foreach ($map['FeCuOnEcs'] as $item1) {
                    $model->feCuOnEcs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FeNumber'])) {
            $model->feNumber = feNumber::fromMap($map['FeNumber']);
        }

        if (isset($map['FeSpecType'])) {
            if (!empty($map['FeSpecType'])) {
                $model->feSpecType = [];
                $n1 = 0;
                foreach ($map['FeSpecType'] as $item1) {
                    $model->feSpecType[$n1] = feSpecType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FeStorage'])) {
            $model->feStorage = feStorage::fromMap($map['FeStorage']);
        }

        if (isset($map['HaFeResourceSpec'])) {
            $model->haFeResourceSpec = haFeResourceSpec::fromMap($map['HaFeResourceSpec']);
        }

        if (isset($map['LocalSSDInstanceTypeConstraints'])) {
            if (!empty($map['LocalSSDInstanceTypeConstraints'])) {
                $model->localSSDInstanceTypeConstraints = [];
                $n1 = 0;
                foreach ($map['LocalSSDInstanceTypeConstraints'] as $item1) {
                    $model->localSSDInstanceTypeConstraints[$n1] = localSSDInstanceTypeConstraints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalFeResourceSpec'])) {
            $model->normalFeResourceSpec = normalFeResourceSpec::fromMap($map['NormalFeResourceSpec']);
        }

        if (isset($map['SpecType'])) {
            if (!empty($map['SpecType'])) {
                $model->specType = [];
                $n1 = 0;
                foreach ($map['SpecType'] as $item1) {
                    $model->specType[$n1] = specType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SplitDiskThresholdMap'])) {
            if (!empty($map['SplitDiskThresholdMap'])) {
                $model->splitDiskThresholdMap = [];
                foreach ($map['SplitDiskThresholdMap'] as $key1 => $value1) {
                    $model->splitDiskThresholdMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['VersionConstraint'])) {
            $model->versionConstraint = versionConstraint::fromMap($map['VersionConstraint']);
        }

        if (isset($map['ZoneSupportedEedTypes'])) {
            if (!empty($map['ZoneSupportedEedTypes'])) {
                $model->zoneSupportedEedTypes = [];
                foreach ($map['ZoneSupportedEedTypes'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->zoneSupportedEedTypes[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->zoneSupportedEedTypes[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['ZoneSupportedSpecTypes'])) {
            if (!empty($map['ZoneSupportedSpecTypes'])) {
                $model->zoneSupportedSpecTypes = [];
                foreach ($map['ZoneSupportedSpecTypes'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->zoneSupportedSpecTypes[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->zoneSupportedSpecTypes[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['compactionServiceCuConstraint'])) {
            $model->compactionServiceCuConstraint = compactionServiceCuConstraint::fromMap($map['compactionServiceCuConstraint']);
        }

        if (isset($map['zoneSupportCompactionService'])) {
            if (!empty($map['zoneSupportCompactionService'])) {
                $model->zoneSupportCompactionService = [];
                foreach ($map['zoneSupportCompactionService'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->zoneSupportCompactionService[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->zoneSupportCompactionService[$key1][$n2] = DataZoneSupportCompactionServiceValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
