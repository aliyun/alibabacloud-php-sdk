<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryEndUserHistoryUsageResponseBody\userUsageInfoList;

class QueryEndUserHistoryUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var userUsageInfoList[]
     */
    public $userUsageInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'userUsageInfoList' => 'UserUsageInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->userUsageInfoList)) {
            Model::validateArray($this->userUsageInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userUsageInfoList) {
            if (\is_array($this->userUsageInfoList)) {
                $res['UserUsageInfoList'] = [];
                $n1 = 0;
                foreach ($this->userUsageInfoList as $item1) {
                    $res['UserUsageInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserUsageInfoList'])) {
            if (!empty($map['UserUsageInfoList'])) {
                $model->userUsageInfoList = [];
                $n1 = 0;
                foreach ($map['UserUsageInfoList'] as $item1) {
                    $model->userUsageInfoList[$n1] = userUsageInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
