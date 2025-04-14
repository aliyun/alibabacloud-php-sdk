<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result\metaType;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result\values;

class result extends Model
{
    /**
     * @var string
     */
    public $chartType;

    /**
     * @var string
     */
    public $conclusionText;

    /**
     * @var string
     */
    public $logicSql;

    /**
     * @var metaType[]
     */
    public $metaType;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'chartType' => 'ChartType',
        'conclusionText' => 'ConclusionText',
        'logicSql' => 'LogicSql',
        'metaType' => 'MetaType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->metaType)) {
            Model::validateArray($this->metaType);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chartType) {
            $res['ChartType'] = $this->chartType;
        }

        if (null !== $this->conclusionText) {
            $res['ConclusionText'] = $this->conclusionText;
        }

        if (null !== $this->logicSql) {
            $res['LogicSql'] = $this->logicSql;
        }

        if (null !== $this->metaType) {
            if (\is_array($this->metaType)) {
                $res['MetaType'] = [];
                $n1 = 0;
                foreach ($this->metaType as $item1) {
                    $res['MetaType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChartType'])) {
            $model->chartType = $map['ChartType'];
        }

        if (isset($map['ConclusionText'])) {
            $model->conclusionText = $map['ConclusionText'];
        }

        if (isset($map['LogicSql'])) {
            $model->logicSql = $map['LogicSql'];
        }

        if (isset($map['MetaType'])) {
            if (!empty($map['MetaType'])) {
                $model->metaType = [];
                $n1 = 0;
                foreach ($map['MetaType'] as $item1) {
                    $model->metaType[$n1++] = metaType::fromMap($item1);
                }
            }
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = values::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
