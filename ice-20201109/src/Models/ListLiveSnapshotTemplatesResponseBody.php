<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesResponseBody\templateList;

class ListLiveSnapshotTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var templateList[]
     */
    public $templateList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'sortBy' => 'SortBy',
        'templateList' => 'TemplateList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->templateList)) {
            Model::validateArray($this->templateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->templateList) {
            if (\is_array($this->templateList)) {
                $res['TemplateList'] = [];
                $n1 = 0;
                foreach ($this->templateList as $item1) {
                    $res['TemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['TemplateList'])) {
            if (!empty($map['TemplateList'])) {
                $model->templateList = [];
                $n1 = 0;
                foreach ($map['TemplateList'] as $item1) {
                    $model->templateList[$n1] = templateList::fromMap($item1);
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
