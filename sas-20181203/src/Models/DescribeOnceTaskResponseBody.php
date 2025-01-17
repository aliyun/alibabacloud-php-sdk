<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponseBody\taskManageResponseList;

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
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->taskManageResponseList)) {
            Model::validateArray($this->taskManageResponseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskManageResponseList) {
            if (\is_array($this->taskManageResponseList)) {
                $res['TaskManageResponseList'] = [];
                $n1                            = 0;
                foreach ($this->taskManageResponseList as $item1) {
                    $res['TaskManageResponseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskManageResponseList'])) {
            if (!empty($map['TaskManageResponseList'])) {
                $model->taskManageResponseList = [];
                $n1                            = 0;
                foreach ($map['TaskManageResponseList'] as $item1) {
                    $model->taskManageResponseList[$n1++] = taskManageResponseList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
