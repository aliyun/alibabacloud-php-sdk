<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest\createBizMetricCommand\customAttribute;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest\createBizMetricCommand\relatedBizMetrics;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest\createBizMetricCommand\viewScope;

class createBizMetricCommand extends Model
{
    /**
     * @var string[]
     */
    public $associatedTechMetricFullNames;

    /**
     * @var string
     */
    public $bizOwnerName;

    /**
     * @var int[]
     */
    public $catalogIds;

    /**
     * @var customAttribute[]
     */
    public $customAttribute;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $metricDefinition;

    /**
     * @var string
     */
    public $metricRelationDiagramExpression;

    /**
     * @var bool
     */
    public $metricRelationDiagramSwitchOpen;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operateInstructionContent;

    /**
     * @var bool
     */
    public $operateInstructionEnabled;

    /**
     * @var relatedBizMetrics[]
     */
    public $relatedBizMetrics;

    /**
     * @var viewScope
     */
    public $viewScope;
    protected $_name = [
        'associatedTechMetricFullNames' => 'AssociatedTechMetricFullNames',
        'bizOwnerName' => 'BizOwnerName',
        'catalogIds' => 'CatalogIds',
        'customAttribute' => 'CustomAttribute',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'labels' => 'Labels',
        'metricDefinition' => 'MetricDefinition',
        'metricRelationDiagramExpression' => 'MetricRelationDiagramExpression',
        'metricRelationDiagramSwitchOpen' => 'MetricRelationDiagramSwitchOpen',
        'name' => 'Name',
        'operateInstructionContent' => 'OperateInstructionContent',
        'operateInstructionEnabled' => 'OperateInstructionEnabled',
        'relatedBizMetrics' => 'RelatedBizMetrics',
        'viewScope' => 'ViewScope',
    ];

    public function validate()
    {
        if (\is_array($this->associatedTechMetricFullNames)) {
            Model::validateArray($this->associatedTechMetricFullNames);
        }
        if (\is_array($this->catalogIds)) {
            Model::validateArray($this->catalogIds);
        }
        if (\is_array($this->customAttribute)) {
            Model::validateArray($this->customAttribute);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->relatedBizMetrics)) {
            Model::validateArray($this->relatedBizMetrics);
        }
        if (null !== $this->viewScope) {
            $this->viewScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedTechMetricFullNames) {
            if (\is_array($this->associatedTechMetricFullNames)) {
                $res['AssociatedTechMetricFullNames'] = [];
                $n1 = 0;
                foreach ($this->associatedTechMetricFullNames as $item1) {
                    $res['AssociatedTechMetricFullNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizOwnerName) {
            $res['BizOwnerName'] = $this->bizOwnerName;
        }

        if (null !== $this->catalogIds) {
            if (\is_array($this->catalogIds)) {
                $res['CatalogIds'] = [];
                $n1 = 0;
                foreach ($this->catalogIds as $item1) {
                    $res['CatalogIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customAttribute) {
            if (\is_array($this->customAttribute)) {
                $res['CustomAttribute'] = [];
                $n1 = 0;
                foreach ($this->customAttribute as $item1) {
                    $res['CustomAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricDefinition) {
            $res['MetricDefinition'] = $this->metricDefinition;
        }

        if (null !== $this->metricRelationDiagramExpression) {
            $res['MetricRelationDiagramExpression'] = $this->metricRelationDiagramExpression;
        }

        if (null !== $this->metricRelationDiagramSwitchOpen) {
            $res['MetricRelationDiagramSwitchOpen'] = $this->metricRelationDiagramSwitchOpen;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operateInstructionContent) {
            $res['OperateInstructionContent'] = $this->operateInstructionContent;
        }

        if (null !== $this->operateInstructionEnabled) {
            $res['OperateInstructionEnabled'] = $this->operateInstructionEnabled;
        }

        if (null !== $this->relatedBizMetrics) {
            if (\is_array($this->relatedBizMetrics)) {
                $res['RelatedBizMetrics'] = [];
                $n1 = 0;
                foreach ($this->relatedBizMetrics as $item1) {
                    $res['RelatedBizMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->viewScope) {
            $res['ViewScope'] = null !== $this->viewScope ? $this->viewScope->toArray($noStream) : $this->viewScope;
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
        if (isset($map['AssociatedTechMetricFullNames'])) {
            if (!empty($map['AssociatedTechMetricFullNames'])) {
                $model->associatedTechMetricFullNames = [];
                $n1 = 0;
                foreach ($map['AssociatedTechMetricFullNames'] as $item1) {
                    $model->associatedTechMetricFullNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BizOwnerName'])) {
            $model->bizOwnerName = $map['BizOwnerName'];
        }

        if (isset($map['CatalogIds'])) {
            if (!empty($map['CatalogIds'])) {
                $model->catalogIds = [];
                $n1 = 0;
                foreach ($map['CatalogIds'] as $item1) {
                    $model->catalogIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomAttribute'])) {
            if (!empty($map['CustomAttribute'])) {
                $model->customAttribute = [];
                $n1 = 0;
                foreach ($map['CustomAttribute'] as $item1) {
                    $model->customAttribute[$n1] = customAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricDefinition'])) {
            $model->metricDefinition = $map['MetricDefinition'];
        }

        if (isset($map['MetricRelationDiagramExpression'])) {
            $model->metricRelationDiagramExpression = $map['MetricRelationDiagramExpression'];
        }

        if (isset($map['MetricRelationDiagramSwitchOpen'])) {
            $model->metricRelationDiagramSwitchOpen = $map['MetricRelationDiagramSwitchOpen'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperateInstructionContent'])) {
            $model->operateInstructionContent = $map['OperateInstructionContent'];
        }

        if (isset($map['OperateInstructionEnabled'])) {
            $model->operateInstructionEnabled = $map['OperateInstructionEnabled'];
        }

        if (isset($map['RelatedBizMetrics'])) {
            if (!empty($map['RelatedBizMetrics'])) {
                $model->relatedBizMetrics = [];
                $n1 = 0;
                foreach ($map['RelatedBizMetrics'] as $item1) {
                    $model->relatedBizMetrics[$n1] = relatedBizMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ViewScope'])) {
            $model->viewScope = viewScope::fromMap($map['ViewScope']);
        }

        return $model;
    }
}
