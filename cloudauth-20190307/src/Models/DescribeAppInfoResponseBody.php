<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponseBody\appInfoList;
use AlibabaCloud\Tea\Model;

class DescribeAppInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var appInfoList[]
     */
    public $appInfoList;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
        'appInfoList' => 'AppInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
