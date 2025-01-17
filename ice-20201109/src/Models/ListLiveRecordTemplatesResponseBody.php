<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList;

class ListLiveRecordTemplatesResponseBody extends Model
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
     * @var recordTemplateList[]
     */
    public $recordTemplateList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'recordTemplateList' => 'RecordTemplateList',
        'requestId'          => 'RequestId',
        'sortBy'             => 'SortBy',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recordTemplateList)) {
            Model::validateArray($this->recordTemplateList);
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

        if (null !== $this->recordTemplateList) {
            if (\is_array($this->recordTemplateList)) {
                $res['RecordTemplateList'] = [];
                $n1                        = 0;
                foreach ($this->recordTemplateList as $item1) {
                    $res['RecordTemplateList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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

        if (isset($map['RecordTemplateList'])) {
            if (!empty($map['RecordTemplateList'])) {
                $model->recordTemplateList = [];
                $n1                        = 0;
                foreach ($map['RecordTemplateList'] as $item1) {
                    $model->recordTemplateList[$n1++] = recordTemplateList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
