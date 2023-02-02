<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo\msgFoundList;
use AlibabaCloud\Tea\Model;

class msgFoundDo extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The total number of returned pages.
     *
     * @example 400
     *
     * @var int
     */
    public $maxPageCount;

    /**
     * @description The information about messages on the returned page. The information that is contained in this parameter is the same as the information that is returned by the [OnsMessageGetByMsgId](~~29607~~) operation.
     *
     * @var msgFoundList
     */
    public $msgFoundList;

    /**
     * @description The ID of the query task. The first time you call this operation to query the dead-letter messages that are sent to a specified consumer group within a specified time range, this parameter is returned. You can use the task ID to query the details of dead-letter messages on other returned pages.
     *
     * @example 0BC1310300002A9F000021E4D7A48346
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'maxPageCount' => 'MaxPageCount',
        'msgFoundList' => 'MsgFoundList',
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
        if (null !== $this->maxPageCount) {
            $res['MaxPageCount'] = $this->maxPageCount;
        }
        if (null !== $this->msgFoundList) {
            $res['MsgFoundList'] = null !== $this->msgFoundList ? $this->msgFoundList->toMap() : null;
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
