<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\textSummary\textLabels;

class textSummary extends Model
{
    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var textLabels[]
     */
    public $textLabels;
    protected $_name = [
        'riskLevel' => 'RiskLevel',
        'textLabels' => 'TextLabels',
    ];

    public function validate()
    {
        if (\is_array($this->textLabels)) {
            Model::validateArray($this->textLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->textLabels) {
            if (\is_array($this->textLabels)) {
                $res['TextLabels'] = [];
                $n1 = 0;
                foreach ($this->textLabels as $item1) {
                    $res['TextLabels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['TextLabels'])) {
            if (!empty($map['TextLabels'])) {
                $model->textLabels = [];
                $n1 = 0;
                foreach ($map['TextLabels'] as $item1) {
                    $model->textLabels[$n1] = textLabels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
