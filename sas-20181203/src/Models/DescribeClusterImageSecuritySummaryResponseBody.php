<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent;

class DescribeClusterImageSecuritySummaryResponseBody extends Model
{
    /**
     * @var clusterImageEvent
     */
    public $clusterImageEvent;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterImageEvent' => 'ClusterImageEvent',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterImageEvent) {
            $this->clusterImageEvent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterImageEvent) {
            $res['ClusterImageEvent'] = null !== $this->clusterImageEvent ? $this->clusterImageEvent->toArray($noStream) : $this->clusterImageEvent;
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
        if (isset($map['ClusterImageEvent'])) {
            $model->clusterImageEvent = clusterImageEvent::fromMap($map['ClusterImageEvent']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
