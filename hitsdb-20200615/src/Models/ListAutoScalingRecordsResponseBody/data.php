<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsResponseBody\data\scaleRecords;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var scaleRecords[]
     */
    public $scaleRecords;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'scaleRecords' => 'ScaleRecords',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
        if (\is_array($this->scaleRecords)) {
            Model::validateArray($this->scaleRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scaleRecords) {
            if (\is_array($this->scaleRecords)) {
                $res['ScaleRecords'] = [];
                $n1 = 0;
                foreach ($this->scaleRecords as $item1) {
                    $res['ScaleRecords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ScaleRecords'])) {
            if (!empty($map['ScaleRecords'])) {
                $model->scaleRecords = [];
                $n1 = 0;
                foreach ($map['ScaleRecords'] as $item1) {
                    $model->scaleRecords[$n1++] = scaleRecords::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
