<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsResponseBody\insightsEvents;

class ListInsightsEventsResponseBody extends Model
{
    /**
     * @var insightsEvents[]
     */
    public $insightsEvents;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'insightsEvents' => 'InsightsEvents',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->insightsEvents)) {
            Model::validateArray($this->insightsEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insightsEvents) {
            if (\is_array($this->insightsEvents)) {
                $res['InsightsEvents'] = [];
                $n1 = 0;
                foreach ($this->insightsEvents as $item1) {
                    $res['InsightsEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InsightsEvents'])) {
            if (!empty($map['InsightsEvents'])) {
                $model->insightsEvents = [];
                $n1 = 0;
                foreach ($map['InsightsEvents'] as $item1) {
                    $model->insightsEvents[$n1] = insightsEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
