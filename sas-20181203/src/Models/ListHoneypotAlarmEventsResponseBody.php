<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\honeypotAlarmEvents;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

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
        'pageInfo'            => 'PageInfo',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotAlarmEvents) {
            $res['HoneypotAlarmEvents'] = [];
            if (null !== $this->honeypotAlarmEvents && \is_array($this->honeypotAlarmEvents)) {
                $n = 0;
                foreach ($this->honeypotAlarmEvents as $item) {
                    $res['HoneypotAlarmEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotAlarmEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotAlarmEvents'])) {
            if (!empty($map['HoneypotAlarmEvents'])) {
                $model->honeypotAlarmEvents = [];
                $n                          = 0;
                foreach ($map['HoneypotAlarmEvents'] as $item) {
                    $model->honeypotAlarmEvents[$n++] = null !== $item ? honeypotAlarmEvents::fromMap($item) : $item;
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
