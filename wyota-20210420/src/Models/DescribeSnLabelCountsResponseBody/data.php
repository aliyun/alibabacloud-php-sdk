<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeSnLabelCountsResponseBody\data\labelCountDTOList;

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
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->labelCountDTOList)) {
            Model::validateArray($this->labelCountDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelCountDTOList) {
            if (\is_array($this->labelCountDTOList)) {
                $res['LabelCountDTOList'] = [];
                $n1 = 0;
                foreach ($this->labelCountDTOList as $item1) {
                    $res['LabelCountDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['LabelCountDTOList'])) {
            if (!empty($map['LabelCountDTOList'])) {
                $model->labelCountDTOList = [];
                $n1 = 0;
                foreach ($map['LabelCountDTOList'] as $item1) {
                    $model->labelCountDTOList[$n1] = labelCountDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
