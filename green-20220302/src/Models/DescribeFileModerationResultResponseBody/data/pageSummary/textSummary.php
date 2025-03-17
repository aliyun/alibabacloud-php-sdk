<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\textSummary\textLabels;
use AlibabaCloud\Tea\Model;

class textSummary extends Model
{
    /**
     * @description Risk Level
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description Text Label
     *
     * @var textLabels[]
     */
    public $textLabels;
    protected $_name = [
        'riskLevel' => 'RiskLevel',
        'textLabels' => 'TextLabels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->textLabels) {
            $res['TextLabels'] = [];
            if (null !== $this->textLabels && \is_array($this->textLabels)) {
                $n = 0;
                foreach ($this->textLabels as $item) {
                    $res['TextLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['TextLabels'])) {
            if (!empty($map['TextLabels'])) {
                $model->textLabels = [];
                $n = 0;
                foreach ($map['TextLabels'] as $item) {
                    $model->textLabels[$n++] = null !== $item ? textLabels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
