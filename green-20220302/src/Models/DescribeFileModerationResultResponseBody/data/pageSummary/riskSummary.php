<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\riskSummary\ext;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\riskSummary\riskLabels;

class riskSummary extends Model
{
    /**
     * @var ext
     */
    public $ext;

    /**
     * @var riskLabels[]
     */
    public $riskLabels;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'ext' => 'Ext',
        'riskLabels' => 'RiskLabels',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        if (\is_array($this->riskLabels)) {
            Model::validateArray($this->riskLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->riskLabels) {
            if (\is_array($this->riskLabels)) {
                $res['RiskLabels'] = [];
                $n1 = 0;
                foreach ($this->riskLabels as $item1) {
                    $res['RiskLabels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }

        if (isset($map['RiskLabels'])) {
            if (!empty($map['RiskLabels'])) {
                $model->riskLabels = [];
                $n1 = 0;
                foreach ($map['RiskLabels'] as $item1) {
                    $model->riskLabels[$n1] = riskLabels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
