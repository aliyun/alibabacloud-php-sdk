<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody\accessKeyLeakList;

class DescribeAccesskeyLeakListResponseBody extends Model
{
    /**
     * @var accessKeyLeakList[]
     */
    public $accessKeyLeakList;
    /**
     * @var int
     */
    public $akLeakCount;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $gmtLast;
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
        'accessKeyLeakList' => 'AccessKeyLeakList',
        'akLeakCount'       => 'AkLeakCount',
        'currentPage'       => 'CurrentPage',
        'gmtLast'           => 'GmtLast',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->accessKeyLeakList)) {
            Model::validateArray($this->accessKeyLeakList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyLeakList) {
            if (\is_array($this->accessKeyLeakList)) {
                $res['AccessKeyLeakList'] = [];
                $n1                       = 0;
                foreach ($this->accessKeyLeakList as $item1) {
                    $res['AccessKeyLeakList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->akLeakCount) {
            $res['AkLeakCount'] = $this->akLeakCount;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
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
        if (isset($map['AccessKeyLeakList'])) {
            if (!empty($map['AccessKeyLeakList'])) {
                $model->accessKeyLeakList = [];
                $n1                       = 0;
                foreach ($map['AccessKeyLeakList'] as $item1) {
                    $model->accessKeyLeakList[$n1++] = accessKeyLeakList::fromMap($item1);
                }
            }
        }

        if (isset($map['AkLeakCount'])) {
            $model->akLeakCount = $map['AkLeakCount'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
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
