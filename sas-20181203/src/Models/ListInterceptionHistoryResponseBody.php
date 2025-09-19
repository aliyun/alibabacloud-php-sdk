<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponseBody\interceptionHistoryList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponseBody\pageInfo;

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
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->interceptionHistoryList)) {
            Model::validateArray($this->interceptionHistoryList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interceptionHistoryList) {
            if (\is_array($this->interceptionHistoryList)) {
                $res['InterceptionHistoryList'] = [];
                $n1 = 0;
                foreach ($this->interceptionHistoryList as $item1) {
                    $res['InterceptionHistoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InterceptionHistoryList'])) {
            if (!empty($map['InterceptionHistoryList'])) {
                $model->interceptionHistoryList = [];
                $n1 = 0;
                foreach ($map['InterceptionHistoryList'] as $item1) {
                    $model->interceptionHistoryList[$n1] = interceptionHistoryList::fromMap($item1);
                    ++$n1;
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
