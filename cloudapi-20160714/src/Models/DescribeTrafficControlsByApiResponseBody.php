<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody\trafficControlItems;

class DescribeTrafficControlsByApiResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficControlItems
     */
    public $trafficControlItems;
    protected $_name = [
        'requestId' => 'RequestId',
        'trafficControlItems' => 'TrafficControlItems',
    ];

    public function validate()
    {
        if (null !== $this->trafficControlItems) {
            $this->trafficControlItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficControlItems) {
            $res['TrafficControlItems'] = null !== $this->trafficControlItems ? $this->trafficControlItems->toArray($noStream) : $this->trafficControlItems;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrafficControlItems'])) {
            $model->trafficControlItems = trafficControlItems::fromMap($map['TrafficControlItems']);
        }

        return $model;
    }
}
