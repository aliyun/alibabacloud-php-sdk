<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent;

class DescribeClusterHostSecuritySummaryResponseBody extends Model
{
    /**
     * @var clusterHostEvent
     */
    public $clusterHostEvent;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterHostEvent' => 'ClusterHostEvent',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterHostEvent) {
            $this->clusterHostEvent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterHostEvent) {
            $res['ClusterHostEvent'] = null !== $this->clusterHostEvent ? $this->clusterHostEvent->toArray($noStream) : $this->clusterHostEvent;
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
        if (isset($map['ClusterHostEvent'])) {
            $model->clusterHostEvent = clusterHostEvent::fromMap($map['ClusterHostEvent']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
