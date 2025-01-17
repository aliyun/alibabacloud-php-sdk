<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody\recoverableInfoList;

class DescribeUniRecoverableListResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $database;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var recoverableInfoList[]
     */
    public $recoverableInfoList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'               => 'Count',
        'currentPage'         => 'CurrentPage',
        'database'            => 'Database',
        'pageSize'            => 'PageSize',
        'recoverableInfoList' => 'RecoverableInfoList',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->recoverableInfoList)) {
            Model::validateArray($this->recoverableInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recoverableInfoList) {
            if (\is_array($this->recoverableInfoList)) {
                $res['RecoverableInfoList'] = [];
                $n1                         = 0;
                foreach ($this->recoverableInfoList as $item1) {
                    $res['RecoverableInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecoverableInfoList'])) {
            if (!empty($map['RecoverableInfoList'])) {
                $model->recoverableInfoList = [];
                $n1                         = 0;
                foreach ($map['RecoverableInfoList'] as $item1) {
                    $model->recoverableInfoList[$n1++] = recoverableInfoList::fromMap($item1);
                }
            }
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
