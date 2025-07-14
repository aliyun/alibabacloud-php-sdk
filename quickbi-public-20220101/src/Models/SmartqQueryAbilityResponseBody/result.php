<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result\metaType;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result\values;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Suggested chart type.
     *
     * @example NEW_TABLE
     *
     * @var string
     */
    public $chartType;

    /**
     * @description Summary information.
     *
     * @example Schedule
     *
     * @var string
     */
    public $conclusionText;

    /**
     * @description Visualized logical SQL.
     *
     * @example select * ****
     *
     * @var string
     */
    public $logicSql;

    /**
     * @description List of column tuple types.
     *
     * @var metaType[]
     */
    public $metaType;

    /**
     * @description Array of data value lists.
     *
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

    public function validate() {}

    public function toMap()
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
            $res['MetaType'] = [];
            if (null !== $this->metaType && \is_array($this->metaType)) {
                $n = 0;
                foreach ($this->metaType as $item) {
                    $res['MetaType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
                $n = 0;
                foreach ($map['MetaType'] as $item) {
                    $model->metaType[$n++] = null !== $item ? metaType::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
