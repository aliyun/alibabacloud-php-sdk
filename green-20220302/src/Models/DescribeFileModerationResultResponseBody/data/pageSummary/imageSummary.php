<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\imageSummary\imageLabels;

class imageSummary extends Model
{
    /**
     * @var imageLabels[]
     */
    public $imageLabels;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'imageLabels' => 'ImageLabels',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->imageLabels)) {
            Model::validateArray($this->imageLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageLabels) {
            if (\is_array($this->imageLabels)) {
                $res['ImageLabels'] = [];
                $n1 = 0;
                foreach ($this->imageLabels as $item1) {
                    $res['ImageLabels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageLabels'])) {
            if (!empty($map['ImageLabels'])) {
                $model->imageLabels = [];
                $n1 = 0;
                foreach ($map['ImageLabels'] as $item1) {
                    $model->imageLabels[$n1++] = imageLabels::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
