<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryConfigUnified extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var bool
     */
    public $checkAfterDataComplete;

    /**
     * @var string[][]
     */
    public $dimensions;

    /**
     * @var int
     */
    public $durationSecs;

    /**
     * @var bool
     */
    public $enableDataCompleteCheck;

    /**
     * @var string
     */
    public $entityDomain;

    /**
     * @var EntityFields[]
     */
    public $entityFields;

    /**
     * @var EntityFilters[]
     */
    public $entityFilters;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var FilterList[]
     */
    public $filterList;

    /**
     * @var PrometheusMetricFilterValue[]
     */
    public $filterValues;

    /**
     * @var string[]
     */
    public $groupFieldList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var Joinings[]
     */
    public $joinings;

    /**
     * @var LabelFilters[]
     */
    public $labelFilters;

    /**
     * @var string
     */
    public $legacyRaw;

    /**
     * @var string
     */
    public $legacyType;

    /**
     * @var string
     */
    public $logSet;

    /**
     * @var string
     */
    public $measureGroupKey;

    /**
     * @var MeasureList[]
     */
    public $measureList;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $metricGroupId;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var string[]
     */
    public $metricIds;

    /**
     * @var string
     */
    public $metricSet;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $offsetSecs;

    /**
     * @var PrometheusMetricParamValue[]
     */
    public $paramValues;

    /**
     * @var string
     */
    public $promQl;

    /**
     * @var Queries[]
     */
    public $queries;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string[]
     */
    public $serviceIdList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $windowSecs;
    protected $_name = [
        'aggregate' => 'aggregate',
        'checkAfterDataComplete' => 'checkAfterDataComplete',
        'dimensions' => 'dimensions',
        'durationSecs' => 'durationSecs',
        'enableDataCompleteCheck' => 'enableDataCompleteCheck',
        'entityDomain' => 'entityDomain',
        'entityFields' => 'entityFields',
        'entityFilters' => 'entityFilters',
        'entityType' => 'entityType',
        'expr' => 'expr',
        'filterList' => 'filterList',
        'filterValues' => 'filterValues',
        'groupFieldList' => 'groupFieldList',
        'groupId' => 'groupId',
        'groupType' => 'groupType',
        'joinings' => 'joinings',
        'labelFilters' => 'labelFilters',
        'legacyRaw' => 'legacyRaw',
        'legacyType' => 'legacyType',
        'logSet' => 'logSet',
        'measureGroupKey' => 'measureGroupKey',
        'measureList' => 'measureList',
        'metric' => 'metric',
        'metricGroupId' => 'metricGroupId',
        'metricId' => 'metricId',
        'metricIds' => 'metricIds',
        'metricSet' => 'metricSet',
        'namespace' => 'namespace',
        'offsetSecs' => 'offsetSecs',
        'paramValues' => 'paramValues',
        'promQl' => 'promQl',
        'queries' => 'queries',
        'relationType' => 'relationType',
        'serviceIdList' => 'serviceIdList',
        'type' => 'type',
        'windowSecs' => 'windowSecs',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->entityFields)) {
            Model::validateArray($this->entityFields);
        }
        if (\is_array($this->entityFilters)) {
            Model::validateArray($this->entityFilters);
        }
        if (\is_array($this->filterList)) {
            Model::validateArray($this->filterList);
        }
        if (\is_array($this->filterValues)) {
            Model::validateArray($this->filterValues);
        }
        if (\is_array($this->groupFieldList)) {
            Model::validateArray($this->groupFieldList);
        }
        if (\is_array($this->joinings)) {
            Model::validateArray($this->joinings);
        }
        if (\is_array($this->labelFilters)) {
            Model::validateArray($this->labelFilters);
        }
        if (\is_array($this->measureList)) {
            Model::validateArray($this->measureList);
        }
        if (\is_array($this->metricIds)) {
            Model::validateArray($this->metricIds);
        }
        if (\is_array($this->paramValues)) {
            Model::validateArray($this->paramValues);
        }
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        if (\is_array($this->serviceIdList)) {
            Model::validateArray($this->serviceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['aggregate'] = $this->aggregate;
        }

        if (null !== $this->checkAfterDataComplete) {
            $res['checkAfterDataComplete'] = $this->checkAfterDataComplete;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    if (\is_array($item1)) {
                        $res['dimensions'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['dimensions'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->enableDataCompleteCheck) {
            $res['enableDataCompleteCheck'] = $this->enableDataCompleteCheck;
        }

        if (null !== $this->entityDomain) {
            $res['entityDomain'] = $this->entityDomain;
        }

        if (null !== $this->entityFields) {
            if (\is_array($this->entityFields)) {
                $res['entityFields'] = [];
                $n1 = 0;
                foreach ($this->entityFields as $item1) {
                    $res['entityFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityFilters) {
            if (\is_array($this->entityFilters)) {
                $res['entityFilters'] = [];
                $n1 = 0;
                foreach ($this->entityFilters as $item1) {
                    $res['entityFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->filterList) {
            if (\is_array($this->filterList)) {
                $res['filterList'] = [];
                $n1 = 0;
                foreach ($this->filterList as $item1) {
                    $res['filterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filterValues) {
            if (\is_array($this->filterValues)) {
                $res['filterValues'] = [];
                $n1 = 0;
                foreach ($this->filterValues as $item1) {
                    $res['filterValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupFieldList) {
            if (\is_array($this->groupFieldList)) {
                $res['groupFieldList'] = [];
                $n1 = 0;
                foreach ($this->groupFieldList as $item1) {
                    $res['groupFieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->joinings) {
            if (\is_array($this->joinings)) {
                $res['joinings'] = [];
                $n1 = 0;
                foreach ($this->joinings as $item1) {
                    $res['joinings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelFilters) {
            if (\is_array($this->labelFilters)) {
                $res['labelFilters'] = [];
                $n1 = 0;
                foreach ($this->labelFilters as $item1) {
                    $res['labelFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->legacyRaw) {
            $res['legacyRaw'] = $this->legacyRaw;
        }

        if (null !== $this->legacyType) {
            $res['legacyType'] = $this->legacyType;
        }

        if (null !== $this->logSet) {
            $res['logSet'] = $this->logSet;
        }

        if (null !== $this->measureGroupKey) {
            $res['measureGroupKey'] = $this->measureGroupKey;
        }

        if (null !== $this->measureList) {
            if (\is_array($this->measureList)) {
                $res['measureList'] = [];
                $n1 = 0;
                foreach ($this->measureList as $item1) {
                    $res['measureList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->metricGroupId) {
            $res['metricGroupId'] = $this->metricGroupId;
        }

        if (null !== $this->metricId) {
            $res['metricId'] = $this->metricId;
        }

        if (null !== $this->metricIds) {
            if (\is_array($this->metricIds)) {
                $res['metricIds'] = [];
                $n1 = 0;
                foreach ($this->metricIds as $item1) {
                    $res['metricIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricSet) {
            $res['metricSet'] = $this->metricSet;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->offsetSecs) {
            $res['offsetSecs'] = $this->offsetSecs;
        }

        if (null !== $this->paramValues) {
            if (\is_array($this->paramValues)) {
                $res['paramValues'] = [];
                $n1 = 0;
                foreach ($this->paramValues as $item1) {
                    $res['paramValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promQl) {
            $res['promQl'] = $this->promQl;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['queries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
        }

        if (null !== $this->serviceIdList) {
            if (\is_array($this->serviceIdList)) {
                $res['serviceIdList'] = [];
                $n1 = 0;
                foreach ($this->serviceIdList as $item1) {
                    $res['serviceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->windowSecs) {
            $res['windowSecs'] = $this->windowSecs;
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
        if (isset($map['aggregate'])) {
            $model->aggregate = $map['aggregate'];
        }

        if (isset($map['checkAfterDataComplete'])) {
            $model->checkAfterDataComplete = $map['checkAfterDataComplete'];
        }

        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['dimensions'] as $item1) {
                    if (!empty($item1)) {
                        $model->dimensions[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->dimensions[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['enableDataCompleteCheck'])) {
            $model->enableDataCompleteCheck = $map['enableDataCompleteCheck'];
        }

        if (isset($map['entityDomain'])) {
            $model->entityDomain = $map['entityDomain'];
        }

        if (isset($map['entityFields'])) {
            if (!empty($map['entityFields'])) {
                $model->entityFields = [];
                $n1 = 0;
                foreach ($map['entityFields'] as $item1) {
                    $model->entityFields[$n1] = EntityFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityFilters'])) {
            if (!empty($map['entityFilters'])) {
                $model->entityFilters = [];
                $n1 = 0;
                foreach ($map['entityFilters'] as $item1) {
                    $model->entityFilters[$n1] = EntityFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['filterList'])) {
            if (!empty($map['filterList'])) {
                $model->filterList = [];
                $n1 = 0;
                foreach ($map['filterList'] as $item1) {
                    $model->filterList[$n1] = FilterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['filterValues'])) {
            if (!empty($map['filterValues'])) {
                $model->filterValues = [];
                $n1 = 0;
                foreach ($map['filterValues'] as $item1) {
                    $model->filterValues[$n1] = PrometheusMetricFilterValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['groupFieldList'])) {
            if (!empty($map['groupFieldList'])) {
                $model->groupFieldList = [];
                $n1 = 0;
                foreach ($map['groupFieldList'] as $item1) {
                    $model->groupFieldList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['joinings'])) {
            if (!empty($map['joinings'])) {
                $model->joinings = [];
                $n1 = 0;
                foreach ($map['joinings'] as $item1) {
                    $model->joinings[$n1] = Joinings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['labelFilters'])) {
            if (!empty($map['labelFilters'])) {
                $model->labelFilters = [];
                $n1 = 0;
                foreach ($map['labelFilters'] as $item1) {
                    $model->labelFilters[$n1] = LabelFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['legacyRaw'])) {
            $model->legacyRaw = $map['legacyRaw'];
        }

        if (isset($map['legacyType'])) {
            $model->legacyType = $map['legacyType'];
        }

        if (isset($map['logSet'])) {
            $model->logSet = $map['logSet'];
        }

        if (isset($map['measureGroupKey'])) {
            $model->measureGroupKey = $map['measureGroupKey'];
        }

        if (isset($map['measureList'])) {
            if (!empty($map['measureList'])) {
                $model->measureList = [];
                $n1 = 0;
                foreach ($map['measureList'] as $item1) {
                    $model->measureList[$n1] = MeasureList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['metricGroupId'])) {
            $model->metricGroupId = $map['metricGroupId'];
        }

        if (isset($map['metricId'])) {
            $model->metricId = $map['metricId'];
        }

        if (isset($map['metricIds'])) {
            if (!empty($map['metricIds'])) {
                $model->metricIds = [];
                $n1 = 0;
                foreach ($map['metricIds'] as $item1) {
                    $model->metricIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['metricSet'])) {
            $model->metricSet = $map['metricSet'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['offsetSecs'])) {
            $model->offsetSecs = $map['offsetSecs'];
        }

        if (isset($map['paramValues'])) {
            if (!empty($map['paramValues'])) {
                $model->paramValues = [];
                $n1 = 0;
                foreach ($map['paramValues'] as $item1) {
                    $model->paramValues[$n1] = PrometheusMetricParamValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['promQl'])) {
            $model->promQl = $map['promQl'];
        }

        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['queries'] as $item1) {
                    $model->queries[$n1] = Queries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
        }

        if (isset($map['serviceIdList'])) {
            if (!empty($map['serviceIdList'])) {
                $model->serviceIdList = [];
                $n1 = 0;
                foreach ($map['serviceIdList'] as $item1) {
                    $model->serviceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['windowSecs'])) {
            $model->windowSecs = $map['windowSecs'];
        }

        return $model;
    }
}
