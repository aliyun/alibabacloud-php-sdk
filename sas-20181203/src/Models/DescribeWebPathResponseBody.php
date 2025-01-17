<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody\configList;

class DescribeWebPathResponseBody extends Model
{
    /**
     * @var configList[]
     */
    public $configList;
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'configList'  => 'ConfigList',
        'count'       => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configList) {
            if (\is_array($this->configList)) {
                $res['ConfigList'] = [];
                $n1                = 0;
                foreach ($this->configList as $item1) {
                    $res['ConfigList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n1                = 0;
                foreach ($map['ConfigList'] as $item1) {
                    $model->configList[$n1++] = configList::fromMap($item1);
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
