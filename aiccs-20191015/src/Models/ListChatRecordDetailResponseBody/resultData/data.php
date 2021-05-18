<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData\data\messageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $servicerName;

    /**
     * @description 在线开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 在线结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 在线会话详细信息
     *
     * @var messageList[]
     */
    public $messageList;
    protected $_name = [
        'servicerName' => 'ServicerName',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'messageList'  => 'MessageList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->messageList) {
            $res['MessageList'] = [];
            if (null !== $this->messageList && \is_array($this->messageList)) {
                $n = 0;
                foreach ($this->messageList as $item) {
                    $res['MessageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n                  = 0;
                foreach ($map['MessageList'] as $item) {
                    $model->messageList[$n++] = null !== $item ? messageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
