<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\entityFields;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\entityFilter;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\labelFilters;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries;

class AlertRuleQuery extends Model
{
    /**
     * @var bool
     */
    public $checkAfterDataComplete;

    /**
     * @var string[][]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var entityFields[]
     */
    public $entityFields;

    /**
     * @var entityFilter
     */
    public $entityFilter;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var AlertRuleSlsQueryJoin
     */
    public $firstJoin;

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
     * @var labelFilters[]
     */
    public $labelFilters;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $metricSet;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var AlertRuleSlsQueryJoin
     */
    public $secondJoin;

    /**
     * @var string[]
     */
    public $serviceIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkAfterDataComplete' => 'checkAfterDataComplete',
        'dimensions' => 'dimensions',
        'domain' => 'domain',
        'duration' => 'duration',
        'entityFields' => 'entityFields',
        'entityFilter' => 'entityFilter',
        'expr' => 'expr',
        'firstJoin' => 'firstJoin',
        'groupFieldList' => 'groupFieldList',
        'groupId' => 'groupId',
        'groupType' => 'groupType',
        'labelFilters' => 'labelFilters',
        'metric' => 'metric',
        'metricSet' => 'metricSet',
        'namespace' => 'namespace',
        'queries' => 'queries',
        'relationType' => 'relationType',
        'secondJoin' => 'secondJoin',
        'serviceIds' => 'serviceIds',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->entityFields)) {
            Model::validateArray($this->entityFields);
        }
        if (null !== $this->entityFilter) {
            $this->entityFilter->validate();
        }
        if (null !== $this->firstJoin) {
            $this->firstJoin->validate();
        }
        if (\is_array($this->groupFieldList)) {
            Model::validateArray($this->groupFieldList);
        }
        if (\is_array($this->labelFilters)) {
            Model::validateArray($this->labelFilters);
        }
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        if (null !== $this->secondJoin) {
            $this->secondJoin->validate();
        }
        if (\is_array($this->serviceIds)) {
            Model::validateArray($this->serviceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
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

        if (null !== $this->entityFilter) {
            $res['entityFilter'] = null !== $this->entityFilter ? $this->entityFilter->toArray($noStream) : $this->entityFilter;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->firstJoin) {
            $res['firstJoin'] = null !== $this->firstJoin ? $this->firstJoin->toArray($noStream) : $this->firstJoin;
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

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->metricSet) {
            $res['metricSet'] = $this->metricSet;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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

        if (null !== $this->secondJoin) {
            $res['secondJoin'] = null !== $this->secondJoin ? $this->secondJoin->toArray($noStream) : $this->secondJoin;
        }

        if (null !== $this->serviceIds) {
            if (\is_array($this->serviceIds)) {
                $res['serviceIds'] = [];
                $n1 = 0;
                foreach ($this->serviceIds as $item1) {
                    $res['serviceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['entityFields'])) {
            if (!empty($map['entityFields'])) {
                $model->entityFields = [];
                $n1 = 0;
                foreach ($map['entityFields'] as $item1) {
                    $model->entityFields[$n1] = entityFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityFilter'])) {
            $model->entityFilter = entityFilter::fromMap($map['entityFilter']);
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['firstJoin'])) {
            $model->firstJoin = AlertRuleSlsQueryJoin::fromMap($map['firstJoin']);
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

        if (isset($map['labelFilters'])) {
            if (!empty($map['labelFilters'])) {
                $model->labelFilters = [];
                $n1 = 0;
                foreach ($map['labelFilters'] as $item1) {
                    $model->labelFilters[$n1] = labelFilters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['metricSet'])) {
            $model->metricSet = $map['metricSet'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['queries'])) {
            if (!empty($map['queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['queries'] as $item1) {
                    $model->queries[$n1] = queries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
        }

        if (isset($map['secondJoin'])) {
            $model->secondJoin = AlertRuleSlsQueryJoin::fromMap($map['secondJoin']);
        }

        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = [];
                $n1 = 0;
                foreach ($map['serviceIds'] as $item1) {
                    $model->serviceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
