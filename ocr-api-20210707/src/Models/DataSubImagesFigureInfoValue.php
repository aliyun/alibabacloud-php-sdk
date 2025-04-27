<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesFigureInfoValue\figureDetails;

class DataSubImagesFigureInfoValue extends Model
{
    /**
     * @var int
     */
    public $figureCount;

    /**
     * @var figureDetails[]
     */
    public $figureDetails;
    protected $_name = [
        'figureCount' => 'FigureCount',
        'figureDetails' => 'FigureDetails',
    ];

    public function validate()
    {
        if (\is_array($this->figureDetails)) {
            Model::validateArray($this->figureDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figureCount) {
            $res['FigureCount'] = $this->figureCount;
        }

        if (null !== $this->figureDetails) {
            if (\is_array($this->figureDetails)) {
                $res['FigureDetails'] = [];
                $n1 = 0;
                foreach ($this->figureDetails as $item1) {
                    $res['FigureDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FigureCount'])) {
            $model->figureCount = $map['FigureCount'];
        }

        if (isset($map['FigureDetails'])) {
            if (!empty($map['FigureDetails'])) {
                $model->figureDetails = [];
                $n1 = 0;
                foreach ($map['FigureDetails'] as $item1) {
                    $model->figureDetails[$n1++] = figureDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
