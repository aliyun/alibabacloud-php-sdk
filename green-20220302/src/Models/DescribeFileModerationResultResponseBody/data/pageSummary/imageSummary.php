<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary\imageSummary\imageLabels;
use AlibabaCloud\Tea\Model;

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
        'riskLevel'   => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageLabels) {
            $res['ImageLabels'] = [];
            if (null !== $this->imageLabels && \is_array($this->imageLabels)) {
                $n = 0;
                foreach ($this->imageLabels as $item) {
                    $res['ImageLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageLabels'])) {
            if (!empty($map['ImageLabels'])) {
                $model->imageLabels = [];
                $n                  = 0;
                foreach ($map['ImageLabels'] as $item) {
                    $model->imageLabels[$n++] = null !== $item ? imageLabels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
