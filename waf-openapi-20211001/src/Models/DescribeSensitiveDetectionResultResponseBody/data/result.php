<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result\list_;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result\max;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The compliance check results. Valid values:
     *
     *   **report**: Risks exist in cross-border data transfer.
     *   **none**: No risks exist in cross-border data transfer.
     *
     * @example report
     *
     * @var string
     */
    public $detectionResult;

    /**
     * @description The sensitive information check results by sensitive data type.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The maximum values in the statistics of sensitive data types.
     *
     * @var max
     */
    public $max;
    protected $_name = [
        'detectionResult' => 'DetectionResult',
        'list' => 'List',
        'max' => 'Max',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->max) {
            $res['Max'] = null !== $this->max ? $this->max->toMap() : null;
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
        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Max'])) {
            $model->max = max::fromMap($map['Max']);
        }

        return $model;
    }
}
