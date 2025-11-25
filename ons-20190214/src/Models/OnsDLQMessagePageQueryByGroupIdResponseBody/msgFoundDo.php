<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody\msgFoundDo\msgFoundList;

class msgFoundDo extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $maxPageCount;

    /**
     * @var msgFoundList
     */
    public $msgFoundList;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'maxPageCount' => 'MaxPageCount',
        'msgFoundList' => 'MsgFoundList',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->msgFoundList) {
            $this->msgFoundList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->maxPageCount) {
            $res['MaxPageCount'] = $this->maxPageCount;
        }

        if (null !== $this->msgFoundList) {
            $res['MsgFoundList'] = null !== $this->msgFoundList ? $this->msgFoundList->toArray($noStream) : $this->msgFoundList;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['MaxPageCount'])) {
            $model->maxPageCount = $map['MaxPageCount'];
        }

        if (isset($map['MsgFoundList'])) {
            $model->msgFoundList = msgFoundList::fromMap($map['MsgFoundList']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
