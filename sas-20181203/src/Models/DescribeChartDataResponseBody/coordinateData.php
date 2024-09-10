<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData\YAxisList;
use AlibabaCloud\Tea\Model;

class coordinateData extends Model
{
    /**
     * @description The x-axis values.
     *
     * @var string[]
     */
    public $XAxis;

    /**
     * @description The y-axis values.
     *
     * @var YAxisList[]
     */
    public $YAxisList;
    protected $_name = [
        'XAxis'     => 'XAxis',
        'YAxisList' => 'YAxisList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->XAxis) {
            $res['XAxis'] = $this->XAxis;
        }
        if (null !== $this->YAxisList) {
            $res['YAxisList'] = [];
            if (null !== $this->YAxisList && \is_array($this->YAxisList)) {
                $n = 0;
                foreach ($this->YAxisList as $item) {
                    $res['YAxisList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coordinateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['XAxis'])) {
            if (!empty($map['XAxis'])) {
                $model->XAxis = $map['XAxis'];
            }
        }
        if (isset($map['YAxisList'])) {
            if (!empty($map['YAxisList'])) {
                $model->YAxisList = [];
                $n                = 0;
                foreach ($map['YAxisList'] as $item) {
                    $model->YAxisList[$n++] = null !== $item ? YAxisList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
