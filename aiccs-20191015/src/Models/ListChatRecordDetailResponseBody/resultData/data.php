<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData\data\messageList;

class data extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var messageList[]
     */
    public $messageList;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'messageList' => 'MessageList',
        'servicerName' => 'ServicerName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->messageList)) {
            Model::validateArray($this->messageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->messageList) {
            if (\is_array($this->messageList)) {
                $res['MessageList'] = [];
                $n1 = 0;
                foreach ($this->messageList as $item1) {
                    $res['MessageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n1 = 0;
                foreach ($map['MessageList'] as $item1) {
                    $model->messageList[$n1++] = messageList::fromMap($item1);
                }
            }
        }

        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
