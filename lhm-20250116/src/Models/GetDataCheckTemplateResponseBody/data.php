<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\basicMetricRules;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\complexMetricRules;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\dsEngineRels;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\fulltextRule;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\metricRules;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\nullRules;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data\weakContentRule;

class data extends Model
{
    /**
     * @var basicMetricRules[]
     */
    public $basicMetricRules;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $checkTypeExport;

    /**
     * @var int
     */
    public $checkTypeName;

    /**
     * @var complexMetricRules[]
     */
    public $complexMetricRules;

    /**
     * @var dsEngineRels[]
     */
    public $dsEngineRels;

    /**
     * @var fulltextRule
     */
    public $fulltextRule;

    /**
     * @var metricRules[]
     */
    public $metricRules;

    /**
     * @var nullRules[]
     */
    public $nullRules;

    /**
     * @var string
     */
    public $templateDesc;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var weakContentRule
     */
    public $weakContentRule;
    protected $_name = [
        'basicMetricRules' => 'basicMetricRules',
        'checkType' => 'checkType',
        'checkTypeExport' => 'checkTypeExport',
        'checkTypeName' => 'checkTypeName',
        'complexMetricRules' => 'complexMetricRules',
        'dsEngineRels' => 'dsEngineRels',
        'fulltextRule' => 'fulltextRule',
        'metricRules' => 'metricRules',
        'nullRules' => 'nullRules',
        'templateDesc' => 'templateDesc',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
        'weakContentRule' => 'weakContentRule',
    ];

    public function validate()
    {
        if (\is_array($this->basicMetricRules)) {
            Model::validateArray($this->basicMetricRules);
        }
        if (\is_array($this->complexMetricRules)) {
            Model::validateArray($this->complexMetricRules);
        }
        if (\is_array($this->dsEngineRels)) {
            Model::validateArray($this->dsEngineRels);
        }
        if (null !== $this->fulltextRule) {
            $this->fulltextRule->validate();
        }
        if (\is_array($this->metricRules)) {
            Model::validateArray($this->metricRules);
        }
        if (\is_array($this->nullRules)) {
            Model::validateArray($this->nullRules);
        }
        if (null !== $this->weakContentRule) {
            $this->weakContentRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicMetricRules) {
            if (\is_array($this->basicMetricRules)) {
                $res['basicMetricRules'] = [];
                $n1 = 0;
                foreach ($this->basicMetricRules as $item1) {
                    $res['basicMetricRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->checkTypeExport) {
            $res['checkTypeExport'] = $this->checkTypeExport;
        }

        if (null !== $this->checkTypeName) {
            $res['checkTypeName'] = $this->checkTypeName;
        }

        if (null !== $this->complexMetricRules) {
            if (\is_array($this->complexMetricRules)) {
                $res['complexMetricRules'] = [];
                $n1 = 0;
                foreach ($this->complexMetricRules as $item1) {
                    $res['complexMetricRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dsEngineRels) {
            if (\is_array($this->dsEngineRels)) {
                $res['dsEngineRels'] = [];
                $n1 = 0;
                foreach ($this->dsEngineRels as $item1) {
                    $res['dsEngineRels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fulltextRule) {
            $res['fulltextRule'] = null !== $this->fulltextRule ? $this->fulltextRule->toArray($noStream) : $this->fulltextRule;
        }

        if (null !== $this->metricRules) {
            if (\is_array($this->metricRules)) {
                $res['metricRules'] = [];
                $n1 = 0;
                foreach ($this->metricRules as $item1) {
                    $res['metricRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nullRules) {
            if (\is_array($this->nullRules)) {
                $res['nullRules'] = [];
                $n1 = 0;
                foreach ($this->nullRules as $item1) {
                    $res['nullRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateDesc) {
            $res['templateDesc'] = $this->templateDesc;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->weakContentRule) {
            $res['weakContentRule'] = null !== $this->weakContentRule ? $this->weakContentRule->toArray($noStream) : $this->weakContentRule;
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
        if (isset($map['basicMetricRules'])) {
            if (!empty($map['basicMetricRules'])) {
                $model->basicMetricRules = [];
                $n1 = 0;
                foreach ($map['basicMetricRules'] as $item1) {
                    $model->basicMetricRules[$n1] = basicMetricRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['checkTypeExport'])) {
            $model->checkTypeExport = $map['checkTypeExport'];
        }

        if (isset($map['checkTypeName'])) {
            $model->checkTypeName = $map['checkTypeName'];
        }

        if (isset($map['complexMetricRules'])) {
            if (!empty($map['complexMetricRules'])) {
                $model->complexMetricRules = [];
                $n1 = 0;
                foreach ($map['complexMetricRules'] as $item1) {
                    $model->complexMetricRules[$n1] = complexMetricRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dsEngineRels'])) {
            if (!empty($map['dsEngineRels'])) {
                $model->dsEngineRels = [];
                $n1 = 0;
                foreach ($map['dsEngineRels'] as $item1) {
                    $model->dsEngineRels[$n1] = dsEngineRels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['fulltextRule'])) {
            $model->fulltextRule = fulltextRule::fromMap($map['fulltextRule']);
        }

        if (isset($map['metricRules'])) {
            if (!empty($map['metricRules'])) {
                $model->metricRules = [];
                $n1 = 0;
                foreach ($map['metricRules'] as $item1) {
                    $model->metricRules[$n1] = metricRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nullRules'])) {
            if (!empty($map['nullRules'])) {
                $model->nullRules = [];
                $n1 = 0;
                foreach ($map['nullRules'] as $item1) {
                    $model->nullRules[$n1] = nullRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['templateDesc'])) {
            $model->templateDesc = $map['templateDesc'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['weakContentRule'])) {
            $model->weakContentRule = weakContentRule::fromMap($map['weakContentRule']);
        }

        return $model;
    }
}
