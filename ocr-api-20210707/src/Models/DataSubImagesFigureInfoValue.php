<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails;
use AlibabaCloud\Tea\Model;

class DataSubImagesFigureInfoValue extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $figureCount;

    /**
     * @var figureDetails[]
     */
    public $figureDetails;
    protected $_name = [
        'figureCount'   => 'FigureCount',
        'figureDetails' => 'FigureDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureCount) {
            $res['FigureCount'] = $this->figureCount;
        }
        if (null !== $this->figureDetails) {
            $res['FigureDetails'] = [];
            if (null !== $this->figureDetails && \is_array($this->figureDetails)) {
                $n = 0;
                foreach ($this->figureDetails as $item) {
                    $res['FigureDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSubImagesFigureInfoValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureCount'])) {
            $model->figureCount = $map['FigureCount'];
        }
        if (isset($map['FigureDetails'])) {
            if (!empty($map['FigureDetails'])) {
                $model->figureDetails = [];
                $n                    = 0;
                foreach ($map['FigureDetails'] as $item) {
                    $model->figureDetails[$n++] = null !== $item ? figureDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
