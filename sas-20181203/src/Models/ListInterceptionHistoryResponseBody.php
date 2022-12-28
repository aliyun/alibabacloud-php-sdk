<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponseBody\interceptionHistoryList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListInterceptionHistoryResponseBody extends Model
{
    /**
     * @var interceptionHistoryList[]
     */
    public $interceptionHistoryList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionHistoryList' => 'InterceptionHistoryList',
        'pageInfo'                => 'PageInfo',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interceptionHistoryList) {
            $res['InterceptionHistoryList'] = [];
            if (null !== $this->interceptionHistoryList && \is_array($this->interceptionHistoryList)) {
                $n = 0;
                foreach ($this->interceptionHistoryList as $item) {
                    $res['InterceptionHistoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterceptionHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterceptionHistoryList'])) {
            if (!empty($map['InterceptionHistoryList'])) {
                $model->interceptionHistoryList = [];
                $n                              = 0;
                foreach ($map['InterceptionHistoryList'] as $item) {
                    $model->interceptionHistoryList[$n++] = null !== $item ? interceptionHistoryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
