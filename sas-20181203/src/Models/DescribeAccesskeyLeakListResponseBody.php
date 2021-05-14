<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponseBody\accessKeyLeakList;
use AlibabaCloud\Tea\Model;

class DescribeAccesskeyLeakListResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $gmtLast;

    /**
     * @var int
     */
    public $akLeakCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var accessKeyLeakList[]
     */
    public $accessKeyLeakList;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'requestId'         => 'RequestId',
        'gmtLast'           => 'GmtLast',
        'akLeakCount'       => 'AkLeakCount',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'accessKeyLeakList' => 'AccessKeyLeakList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->gmtLast) {
            $res['GmtLast'] = $this->gmtLast;
        }
        if (null !== $this->akLeakCount) {
            $res['AkLeakCount'] = $this->akLeakCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->accessKeyLeakList) {
            $res['AccessKeyLeakList'] = [];
            if (null !== $this->accessKeyLeakList && \is_array($this->accessKeyLeakList)) {
                $n = 0;
                foreach ($this->accessKeyLeakList as $item) {
                    $res['AccessKeyLeakList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccesskeyLeakListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GmtLast'])) {
            $model->gmtLast = $map['GmtLast'];
        }
        if (isset($map['AkLeakCount'])) {
            $model->akLeakCount = $map['AkLeakCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AccessKeyLeakList'])) {
            if (!empty($map['AccessKeyLeakList'])) {
                $model->accessKeyLeakList = [];
                $n                        = 0;
                foreach ($map['AccessKeyLeakList'] as $item) {
                    $model->accessKeyLeakList[$n++] = null !== $item ? accessKeyLeakList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
