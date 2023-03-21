<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\taskManageResponseList;
use AlibabaCloud\Tea\Model;

class DescribeOnceTaskResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskManageResponseList[]
     */
    public $taskManageResponseList;
    protected $_name = [
        'pageInfo'               => 'PageInfo',
        'requestId'              => 'RequestId',
        'taskManageResponseList' => 'TaskManageResponseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskManageResponseList) {
            $res['TaskManageResponseList'] = [];
            if (null !== $this->taskManageResponseList && \is_array($this->taskManageResponseList)) {
                $n = 0;
                foreach ($this->taskManageResponseList as $item) {
                    $res['TaskManageResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnceTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskManageResponseList'])) {
            if (!empty($map['TaskManageResponseList'])) {
                $model->taskManageResponseList = [];
                $n                             = 0;
                foreach ($map['TaskManageResponseList'] as $item) {
                    $model->taskManageResponseList[$n++] = null !== $item ? taskManageResponseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
