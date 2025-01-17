<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData\YAxisList;

class coordinateData extends Model
{
    /**
     * @var string[]
     */
    public $XAxis;
    /**
     * @var YAxisList[]
     */
    public $YAxisList;
    protected $_name = [
        'XAxis'     => 'XAxis',
        'YAxisList' => 'YAxisList',
    ];

    public function validate()
    {
        if (\is_array($this->XAxis)) {
            Model::validateArray($this->XAxis);
        }
        if (\is_array($this->YAxisList)) {
            Model::validateArray($this->YAxisList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->XAxis) {
            if (\is_array($this->XAxis)) {
                $res['XAxis'] = [];
                $n1           = 0;
                foreach ($this->XAxis as $item1) {
                    $res['XAxis'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->YAxisList) {
            if (\is_array($this->YAxisList)) {
                $res['YAxisList'] = [];
                $n1               = 0;
                foreach ($this->YAxisList as $item1) {
                    $res['YAxisList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['XAxis'])) {
            if (!empty($map['XAxis'])) {
                $model->XAxis = [];
                $n1           = 0;
                foreach ($map['XAxis'] as $item1) {
                    $model->XAxis[$n1++] = $item1;
                }
            }
        }

        if (isset($map['YAxisList'])) {
            if (!empty($map['YAxisList'])) {
                $model->YAxisList = [];
                $n1               = 0;
                foreach ($map['YAxisList'] as $item1) {
                    $model->YAxisList[$n1++] = YAxisList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
