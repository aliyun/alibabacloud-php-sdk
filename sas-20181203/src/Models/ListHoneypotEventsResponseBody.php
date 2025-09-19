<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\honeypotEvents;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\pageInfo;

class ListHoneypotEventsResponseBody extends Model
{
    /**
     * @var honeypotEvents[]
     */
    public $honeypotEvents;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honeypotEvents' => 'HoneypotEvents',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->honeypotEvents)) {
            Model::validateArray($this->honeypotEvents);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honeypotEvents) {
            if (\is_array($this->honeypotEvents)) {
                $res['HoneypotEvents'] = [];
                $n1 = 0;
                foreach ($this->honeypotEvents as $item1) {
                    $res['HoneypotEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HoneypotEvents'])) {
            if (!empty($map['HoneypotEvents'])) {
                $model->honeypotEvents = [];
                $n1 = 0;
                foreach ($map['HoneypotEvents'] as $item1) {
                    $model->honeypotEvents[$n1] = honeypotEvents::fromMap($item1);
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
