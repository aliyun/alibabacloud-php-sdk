<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data\associatedTechMetrics;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data\catalogs;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data\customAttribute;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data\relatedBizMetrics;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizMetricByNameResponseBody\data\viewScope;

class data extends Model
{
    /**
     * @var associatedTechMetrics[]
     */
    public $associatedTechMetrics;

    /**
     * @var string
     */
    public $bizOwnerName;

    /**
     * @var catalogs[]
     */
    public $catalogs;

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
     * @var string
     */
    public $guid;

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
     * @var int
     */
    public $tenantId;

    /**
     * @var viewScope
     */
    public $viewScope;
    protected $_name = [
        'associatedTechMetrics' => 'AssociatedTechMetrics',
        'bizOwnerName' => 'BizOwnerName',
        'catalogs' => 'Catalogs',
        'customAttribute' => 'CustomAttribute',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'guid' => 'Guid',
        'labels' => 'Labels',
        'metricDefinition' => 'MetricDefinition',
        'metricRelationDiagramExpression' => 'MetricRelationDiagramExpression',
        'metricRelationDiagramSwitchOpen' => 'MetricRelationDiagramSwitchOpen',
        'name' => 'Name',
        'operateInstructionContent' => 'OperateInstructionContent',
        'operateInstructionEnabled' => 'OperateInstructionEnabled',
        'relatedBizMetrics' => 'RelatedBizMetrics',
        'tenantId' => 'TenantId',
        'viewScope' => 'ViewScope',
    ];

    public function validate()
    {
        if (\is_array($this->associatedTechMetrics)) {
            Model::validateArray($this->associatedTechMetrics);
        }
        if (\is_array($this->catalogs)) {
            Model::validateArray($this->catalogs);
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
        if (null !== $this->associatedTechMetrics) {
            if (\is_array($this->associatedTechMetrics)) {
                $res['AssociatedTechMetrics'] = [];
                $n1 = 0;
                foreach ($this->associatedTechMetrics as $item1) {
                    $res['AssociatedTechMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizOwnerName) {
            $res['BizOwnerName'] = $this->bizOwnerName;
        }

        if (null !== $this->catalogs) {
            if (\is_array($this->catalogs)) {
                $res['Catalogs'] = [];
                $n1 = 0;
                foreach ($this->catalogs as $item1) {
                    $res['Catalogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
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

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AssociatedTechMetrics'])) {
            if (!empty($map['AssociatedTechMetrics'])) {
                $model->associatedTechMetrics = [];
                $n1 = 0;
                foreach ($map['AssociatedTechMetrics'] as $item1) {
                    $model->associatedTechMetrics[$n1] = associatedTechMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BizOwnerName'])) {
            $model->bizOwnerName = $map['BizOwnerName'];
        }

        if (isset($map['Catalogs'])) {
            if (!empty($map['Catalogs'])) {
                $model->catalogs = [];
                $n1 = 0;
                foreach ($map['Catalogs'] as $item1) {
                    $model->catalogs[$n1] = catalogs::fromMap($item1);
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

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
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

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ViewScope'])) {
            $model->viewScope = viewScope::fromMap($map['ViewScope']);
        }

        return $model;
    }
}
