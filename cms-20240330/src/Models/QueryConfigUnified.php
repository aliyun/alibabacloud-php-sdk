<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryConfigUnified extends Model
{
    /**
     * @var bool
     */
    public $enableDataCompleteCheck;

    /**
     * @var string
     */
    public $entityDomain;

    /**
     * @var UmodelEntityField[]
     */
    public $entityFields;

    /**
     * @var UmodelEntityFilter[]
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
     * @var ApmFilterConfig[]
     */
    public $filterList;

    /**
     * @var UmodelLabelFilter[]
     */
    public $labelFilters;

    /**
     * @var ApmMeasureConfig[]
     */
    public $measureList;

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
    public $promQl;

    /**
     * @var string[]
     */
    public $serviceIdList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'enableDataCompleteCheck' => 'enableDataCompleteCheck',
        'entityDomain' => 'entityDomain',
        'entityFields' => 'entityFields',
        'entityFilters' => 'entityFilters',
        'entityType' => 'entityType',
        'expr' => 'expr',
        'filterList' => 'filterList',
        'labelFilters' => 'labelFilters',
        'measureList' => 'measureList',
        'metric' => 'metric',
        'metricSet' => 'metricSet',
        'promQl' => 'promQl',
        'serviceIdList' => 'serviceIdList',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->entityFields)) {
            Model::validateArray($this->entityFields);
        }
        if (\is_array($this->entityFilters)) {
            Model::validateArray($this->entityFilters);
        }
        if (\is_array($this->filterList)) {
            Model::validateArray($this->filterList);
        }
        if (\is_array($this->labelFilters)) {
            Model::validateArray($this->labelFilters);
        }
        if (\is_array($this->measureList)) {
            Model::validateArray($this->measureList);
        }
        if (\is_array($this->serviceIdList)) {
            Model::validateArray($this->serviceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->metricSet) {
            $res['metricSet'] = $this->metricSet;
        }

        if (null !== $this->promQl) {
            $res['promQl'] = $this->promQl;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
                    $model->entityFields[$n1] = UmodelEntityField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['entityFilters'])) {
            if (!empty($map['entityFilters'])) {
                $model->entityFilters = [];
                $n1 = 0;
                foreach ($map['entityFilters'] as $item1) {
                    $model->entityFilters[$n1] = UmodelEntityFilter::fromMap($item1);
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
                    $model->filterList[$n1] = ApmFilterConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['labelFilters'])) {
            if (!empty($map['labelFilters'])) {
                $model->labelFilters = [];
                $n1 = 0;
                foreach ($map['labelFilters'] as $item1) {
                    $model->labelFilters[$n1] = UmodelLabelFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['measureList'])) {
            if (!empty($map['measureList'])) {
                $model->measureList = [];
                $n1 = 0;
                foreach ($map['measureList'] as $item1) {
                    $model->measureList[$n1] = ApmMeasureConfig::fromMap($item1);
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

        if (isset($map['promQl'])) {
            $model->promQl = $map['promQl'];
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

        return $model;
    }
}
