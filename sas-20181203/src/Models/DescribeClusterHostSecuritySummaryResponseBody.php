<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent;
use AlibabaCloud\Tea\Model;

class DescribeClusterHostSecuritySummaryResponseBody extends Model
{
    /**
     * @description The alert details of the hosts.
     *
     * @var clusterHostEvent
     */
    public $clusterHostEvent;

    /**
     * @description The request ID.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterHostEvent' => 'ClusterHostEvent',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterHostEvent) {
            $res['ClusterHostEvent'] = null !== $this->clusterHostEvent ? $this->clusterHostEvent->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterHostSecuritySummaryResponseBody
     */
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
