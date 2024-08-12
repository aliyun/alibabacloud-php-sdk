<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsResponseBody\data\labelCountDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var labelCountDTOList[]
     */
    public $labelCountDTOList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'labelCountDTOList' => 'LabelCountDTOList',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelCountDTOList) {
            $res['LabelCountDTOList'] = [];
            if (null !== $this->labelCountDTOList && \is_array($this->labelCountDTOList)) {
                $n = 0;
                foreach ($this->labelCountDTOList as $item) {
                    $res['LabelCountDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelCountDTOList'])) {
            if (!empty($map['LabelCountDTOList'])) {
                $model->labelCountDTOList = [];
                $n                        = 0;
                foreach ($map['LabelCountDTOList'] as $item) {
                    $model->labelCountDTOList[$n++] = null !== $item ? labelCountDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
