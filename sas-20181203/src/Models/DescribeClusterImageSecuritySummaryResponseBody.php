<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent;
use AlibabaCloud\Tea\Model;

class DescribeClusterImageSecuritySummaryResponseBody extends Model
{
    /**
     * @description The information about the image-related security events.
     *
     * @var clusterImageEvent
     */
    public $clusterImageEvent;

    /**
     * @description The request ID.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterImageEvent' => 'ClusterImageEvent',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterImageEvent) {
            $res['ClusterImageEvent'] = null !== $this->clusterImageEvent ? $this->clusterImageEvent->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterImageSecuritySummaryResponseBody
     */
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
