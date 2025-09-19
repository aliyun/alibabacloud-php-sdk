<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\honeypotAlarmEvents;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\pageInfo;

class ListHoneypotAlarmEventsResponseBody extends Model
{
    /**
     * @var honeypotAlarmEvents[]
     */
    public $honeypotAlarmEvents;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honeypotAlarmEvents' => 'HoneypotAlarmEvents',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->honeypotAlarmEvents)) {
            Model::validateArray($this->honeypotAlarmEvents);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honeypotAlarmEvents) {
            if (\is_array($this->honeypotAlarmEvents)) {
                $res['HoneypotAlarmEvents'] = [];
                $n1 = 0;
                foreach ($this->honeypotAlarmEvents as $item1) {
                    $res['HoneypotAlarmEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HoneypotAlarmEvents'])) {
            if (!empty($map['HoneypotAlarmEvents'])) {
                $model->honeypotAlarmEvents = [];
                $n1 = 0;
                foreach ($map['HoneypotAlarmEvents'] as $item1) {
                    $model->honeypotAlarmEvents[$n1] = honeypotAlarmEvents::fromMap($item1);
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
