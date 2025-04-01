<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesResponseBody\data\adviceList;

class data extends Model
{
    /**
     * @var adviceList[]
     */
    public $adviceList;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'adviceList' => 'AdviceList',
        'checkId' => 'CheckId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->adviceList)) {
            Model::validateArray($this->adviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceList) {
            if (\is_array($this->adviceList)) {
                $res['AdviceList'] = [];
                $n1 = 0;
                foreach ($this->adviceList as $item1) {
                    $res['AdviceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AdviceList'])) {
            if (!empty($map['AdviceList'])) {
                $model->adviceList = [];
                $n1 = 0;
                foreach ($map['AdviceList'] as $item1) {
                    $model->adviceList[$n1++] = adviceList::fromMap($item1);
                }
            }
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
