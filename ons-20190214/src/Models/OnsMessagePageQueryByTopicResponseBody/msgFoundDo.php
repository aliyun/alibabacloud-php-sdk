<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo\msgFoundList;
use AlibabaCloud\Tea\Model;

class msgFoundDo extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var msgFoundList[]
     */
    public $msgFoundList;

    /**
     * @var int
     */
    public $maxPageCount;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'msgFoundList' => 'MsgFoundList',
        'maxPageCount' => 'MaxPageCount',
        'taskId'       => 'TaskId',
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
        if (null !== $this->msgFoundList) {
            $res['MsgFoundList'] = [];
            if (null !== $this->msgFoundList && \is_array($this->msgFoundList)) {
                $n = 0;
                foreach ($this->msgFoundList as $item) {
                    $res['MsgFoundList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxPageCount) {
            $res['MaxPageCount'] = $this->maxPageCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgFoundDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MsgFoundList'])) {
            if (!empty($map['MsgFoundList'])) {
                $model->msgFoundList = [];
                $n                   = 0;
                foreach ($map['MsgFoundList'] as $item) {
                    $model->msgFoundList[$n++] = null !== $item ? msgFoundList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxPageCount'])) {
            $model->maxPageCount = $map['MaxPageCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
