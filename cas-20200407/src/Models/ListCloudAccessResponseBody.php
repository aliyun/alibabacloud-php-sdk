<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessResponseBody\cloudAccessList;
use AlibabaCloud\Tea\Model;

class ListCloudAccessResponseBody extends Model
{
    /**
     * @description The query results.
     *
     * @var cloudAccessList[]
     */
    public $cloudAccessList;

    /**
     * @description The default value is the current page. If CurrentPage is not specified, this parameter is not returned.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The request ID.
     *
     * @example D3F1FA43-1C26-50A2-8F0F-7A03851DBB46
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries per page. If ShowSize is not specified, this parameter is not returned.
     *
     * @example 20
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 23
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudAccessList' => 'CloudAccessList',
        'currentPage' => 'CurrentPage',
        'requestId' => 'RequestId',
        'showSize' => 'ShowSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAccessList) {
            $res['CloudAccessList'] = [];
            if (null !== $this->cloudAccessList && \is_array($this->cloudAccessList)) {
                $n = 0;
                foreach ($this->cloudAccessList as $item) {
                    $res['CloudAccessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAccessList'])) {
            if (!empty($map['CloudAccessList'])) {
                $model->cloudAccessList = [];
                $n = 0;
                foreach ($map['CloudAccessList'] as $item) {
                    $model->cloudAccessList[$n++] = null !== $item ? cloudAccessList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
